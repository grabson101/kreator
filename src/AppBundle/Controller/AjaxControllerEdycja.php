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



class AjaxControllerEdycja extends Controller
{

    /**
     * @Route("/get/Table/{miesiac}/{rok}/{ostatniDzien}", name="getTable")
     */

     public function getTable($miesiac, $rok, $ostatniDzien)
     {
         $conn = $this->get('database_connection');



        $myArray = $conn->fetchAll("SELECT ID, Imie, Nazwisko from strazak WHERE Aktywny > 0");


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



//pobranie 3 ostatnich dni, żeby je porównać w widoku
        $lastThreeDays = $conn->fetchAll("SELECT DISTINCT Data FROM grafik ORDER BY Data DESC LIMIT 3");




        $i=0;
        foreach($przydzialy as $key => $value)
        {
//jeżeli w bazie mamy już dodany jakiś miesiąc
            if(!empty($lastThreeDays))
            {
              for($j =count($lastThreeDays)-1; $j>=0 ;$j--)
                {
                  $dzien = $lastThreeDays[$j]['Data'];
                  $szablonDzien = $conn->fetchAll("SELECT Data, ID_Strazaka, Ilosc_godzin FROM grafik WHERE Data = '$dzien' AND ID_Strazaka = ".$value['ID']);
                  foreach ($szablonDzien as $dzien)
                    {
                      $przydzialy[$i]['dni'][] = $dzien;

                    }
                }
            }
            else
            {
              $iloscGodzin= $ostatniDzien-8;

              for($j=0; $j<3; $j++)
              {
                  if($iloscGodzin<0)
                    {
                      $iloscGodzin=16;
                    }
                  $szablonDzien= array('Data'=> number_format($i), 'ID_Strazaka'=> number_format($value['ID']), 'Ilosc_godzin'=> number_format($iloscGodzin));

                  $przydzialy[$i]['dni'][] = $szablonDzien;

                  $iloscGodzin-=8;


              }


            }



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

          $ustawienia = $conn->fetchAssoc("SELECT * FROM ustawienia");

          $dane['stanowiska']=$stanowiska;
          $dane['uprawnienia']=$uprawnienia;
          $dane['przydzialy']=$przydzialy;
          $dane['szablon']=$szablon;
          $dane['ustawienia']=$ustawienia;

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
            for($j=3;$j<count($request["godziny"][$i]["dni"]);$j++)
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
          $suma = $request["sumy"][$i]["godzinyAll"];
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
