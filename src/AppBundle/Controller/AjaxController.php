<?php
/**
 * Created by PhpStorm.
 * User: Mateusz
 * Date: 2016-05-04
 * Time: 11:02
 */

namespace AppBundle\Controller;
use \DateTime;
use AppBundle\Controller\PDO;


//include 'StrazakController.php';
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class AjaxController extends Controller
{

    /**
     * @Route("/get/Table/{miesiac}/{rok}", name="getTable")
     */

     public function getTable($miesiac, $rok)
     {
         $conn = $this->get('database_connection');



        $myArray = $conn->fetchAll("SELECT ID, Imie, Nazwisko from strazak");


        $przydzialy=array();

        foreach($myArray as $key => $value)
          {
            $przydzialy[]= array('Imie'=>$value['Imie'], 'Nazwisko'=>$value['Nazwisko'], 'ID'=>$value['ID']);
          }

          if($miesiac>=7)
              $polowaRoku=2;
          else if ($miesiac<7)
              $polowaRoku=1;

          $sql = "SELECT strazak.ID, suma.Suma_Godzin
            FROM strazak
            INNER JOIN suma
            ON strazak.ID = suma.ID_Strazaka
            WHERE suma.Polowa_Roku = '$polowaRoku' AND suma.Rok = '$rok'";

            $result = $conn->prepare($sql);
            $result->execute();
            $suma = $result->fetchAll();


            if (empty($suma))
            {
                $sql="INSERT INTO `suma` (`ID_Strazaka`,`Rok`,`Polowa_Roku`,`Suma_Godzin`) VALUES (:ID_Strazaka,:Rok,:Polowa_Roku,:Suma_Godzin)";
                $stmt = $conn->prepare($sql);
                foreach($myArray as $key => $value)
                {
                    $stmt->bindValue(':ID_Strazaka',$value['ID'],\PDO::PARAM_INT);
                    $stmt->bindValue(':Rok',$rok,\PDO::PARAM_INT);
                    $stmt->bindValue(':Polowa_Roku',$polowaRoku,\PDO::PARAM_INT);
                    $stmt->bindValue(':Suma_Godzin',0,\PDO::PARAM_INT);

                    $stmt->execute();
                }
                  $sql = "SELECT strazak.ID , suma.Suma_Godzin
                  FROM strazak
                  INNER JOIN suma
                  ON strazak.ID = suma.ID_Strazaka
                  WHERE suma.Polowa_Roku = '$polowaRoku' AND suma.Rok = '$rok'";

                  $result = $conn->prepare($sql);
                  $result->execute();
                  $suma = $result->fetchAll();
            }

            $strazak_stanowisko = $conn->fetchAll("SELECT * FROM strazak_stanowisko");



            $strazak_uprawnienieDodatkowe = $conn->fetchAll("SELECT strazak_uprawnienieDodatkowe.ID_Strazaka, strazak_uprawnienieDodatkowe.ID_Uprawnienia
            FROM strazak_uprawnienieDodatkowe
            INNER JOIN uprawnienia_dodatkowe ON strazak_uprawnienieDodatkowe.ID_Uprawnienia = uprawnienia_dodatkowe.ID
            WHERE uprawnienia_dodatkowe.Minimum > 0");


            for($i=0;$i<count($przydzialy);$i++)
            {
              foreach ($suma as $key => $value)
              {
                if($przydzialy[$i]['ID'] == $value['ID'])
                    $przydzialy[$i]['Suma']=$value['Suma_Godzin'];
              }
              if(!empty($strazak_stanowisko))
              {
                  foreach ($strazak_stanowisko as $key => $value)
                  {
                    if($przydzialy[$i]['ID'] == $value['ID_Strazaka'])
                        $przydzialy[$i]['Stanowisko']=$value['ID_Stanowiska'];
                  }
              }
              if(!empty($strazak_uprawnienieDodatkowe))
              {
                foreach ($strazak_uprawnienieDodatkowe as $key => $value)
                {
                    if($przydzialy[$i]['ID']== $value['ID_Strazaka'])
                    $przydzialy[$i]['Uprawnienia'][]=$value['ID_Uprawnienia'];
                }
              }

            }

        $i=0;

        foreach($przydzialy as $key => $value)
        {

          $sql= "SELECT Data, ID_Strazaka, Ilosc_godzin FROM kopia WHERE ID_Strazaka = ".$value['ID'];
          $result = $conn->prepare($sql);
          $result->execute();
          $tabelaDni = $result->fetchAll();

          if (!empty($tabelaDni))
            {
              foreach($tabelaDni as $value)
              {
                  $przydzialy[$i]['dni'][] = $value;
              }
            }
          $i++;
        }

          $uprawnienia = $conn->fetchAll("SELECT * FROM uprawnienia_dodatkowe WHERE Minimum > 0 ");

          $sql= "SELECT * FROM szablon";
          $result = $conn->prepare($sql);
          $result->execute();
          $szablon= $result->fetchAll();

          $stanowiska = $conn->fetchAll("SELECT * FROM stanowiska");

          $dane['stanowiska']=$stanowiska;
          $dane['uprawnienia']=$uprawnienia;
          $dane['przydzialy']=$przydzialy;
          $dane['szablon']=$szablon;

        return new Response (json_encode($dane));


      }

      /**
       * @Route("/set/Table/{miesiac}/{rok}", name="setTable")
       */

       public function setTable($miesiac, $rok)
       {
         if($miesiac>=7)
             $polowaRoku=2;
         else if ($miesiac<7)
             $polowaRoku=1;


          $postdata = file_get_contents("php://input");
          $request = json_decode($postdata, true);


          $conn = $this->get('database_connection');

          $stmt = $conn->prepare("INSERT INTO `grafik` (`ID_Strazaka`,`Data`,`Ilosc_godzin`)
          VALUES (:ID_Strazaka,:Data,:Ilosc_godzin)");


          for($i=0; $i<count($request["godziny"]);$i++)
          {
            for($j=0;$j<count($request["godziny"][$i]["dni"]);$j++)
            {

              $stmt -> bindValue(':ID_Strazaka', $request["godziny"][$i]["dni"][$j]["ID_Strazaka"], \PDO::PARAM_INT);
              $stmt -> bindValue(':Data', $request["godziny"][$i]["dni"][$j]["Data"], \PDO::PARAM_STR);
              $stmt -> bindValue(':Ilosc_godzin', $request["godziny"][$i]["dni"][$j]["Ilosc_godzin"], \PDO::PARAM_INT);

              $stmt->execute();

          }


        }

       $sql = "SELECT strazak.ID, suma.Suma_Godzin
         FROM strazak
         INNER JOIN suma
         ON strazak.ID = suma.ID_Strazaka
         WHERE suma.Polowa_Roku = '$polowaRoku' AND suma.Rok = '$rok'";

       $result = $conn->prepare($sql);
       $result->execute();
       $sumaWczesniej = $result->fetchAll();

       $stmt = $conn->prepare("UPDATE `suma` SET
        `Suma_Godzin`= :suma WHERE `ID_Strazaka`= :ID_Strazaka AND `Rok`= :rok AND `Polowa_Roku`= :polowaRoku");


        for($i=0;$i<count($sumaWczesniej);$i++)
        {
          $suma = $request["sumy"][$i]["godzinAll"];
          $suma= $suma+intval($sumaWczesniej[$i]["Suma_Godzin"]);

          $stmt->bindValue(':suma',$suma, \PDO::PARAM_INT);
          $stmt->bindValue(':ID_Strazaka',$request["sumy"][$i]["ID"], \PDO::PARAM_INT);
          $stmt->bindValue(':rok',$rok, \PDO::PARAM_INT);
          $stmt->bindValue(':polowaRoku',$polowaRoku, \PDO::PARAM_INT);
          $stmt->execute();
        }



       $conn->exec("TRUNCATE TABLE kopia");
       $conn->exec("TRUNCATE TABLE szablon");
       return new Response ( "Done");
      }

    }
