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
         $sql= "SELECT ID, Imie, Nazwisko from strazak";


        $result = $conn->prepare($sql);
        $result->execute();
        $myArray = $result->fetchAll();


        $przydzialy=array();

        foreach($myArray as $key => $value)
          {
            $przydzialy[]= array('ImieINazwisko'=>$value['Imie']." ".$value['Nazwisko'], 'ID'=>$value['ID']);
          }



        $i=0;

        foreach($myArray as $key => $value)
        {

          $sql= "SELECT * FROM kopia WHERE ID_Strazaka = ".$value['ID'];
          $result = $conn->prepare($sql);
          $result->execute();
          if ( $result->fetchColumn() > 0)
            {
              $sql= "SELECT * FROM kopia WHERE ID_Strazaka = ".$value['ID'];
              $result = $conn->prepare($sql);
              $result->execute();
              // output data of each row
              while($row = $result->fetch(\PDO::FETCH_ASSOC))
              {
                  $przydzialy[$i]['tabelka'][] = $row;
              }
            }
          $i++;
        }

        if($miesiac>=7)
            $polowaRoku=2;
        else if ($miesiac<7)
            $polowaRoku=1;

        $sql = "SELECT strazak.ID, strazak.Imie, strazak.Nazwisko, suma.Suma_Godzin
          FROM strazak
          INNER JOIN suma
          ON strazak.ID = suma.ID_Strazaka
          WHERE suma.Polowa_Roku = '$polowaRoku' AND suma.Rok = '$rok'";

          $result = $conn->prepare($sql);
          $result->execute();
          if ( $result->fetchColumn() == FALSE)
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

          }
          $sql = "SELECT strazak.ID, suma.Suma_Godzin
            FROM strazak
            INNER JOIN suma
            ON strazak.ID = suma.ID_Strazaka
            WHERE suma.Polowa_Roku = '$polowaRoku' AND suma.Rok = '$rok'";

          $result = $conn->prepare($sql);
          $result->execute();
          $suma = $result->fetchAll();

          $dane['przydzialy']=$przydzialy;
          $dane['suma']=$suma;

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
            for($j=0;$j<count($request["godziny"][$i]["tabelka"]);$j++)
            {

              $stmt -> bindValue(':ID_Strazaka', $request["godziny"][$i]["tabelka"][$j]["ID_Strazaka"], \PDO::PARAM_INT);
              $stmt -> bindValue(':Data', $request["godziny"][$i]["tabelka"][$j]["Data"], \PDO::PARAM_STR);
              $stmt -> bindValue(':Ilosc_godzin', $request["godziny"][$i]["tabelka"][$j]["Ilosc_godzin"], \PDO::PARAM_INT);

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
          $suma = $request["sumy"][$i]["hoursAll"];
          $suma= $suma+intval($sumaWczesniej[$i]["Suma_Godzin"]);

          $stmt->bindValue(':suma',$suma, \PDO::PARAM_INT);
          $stmt->bindValue(':ID_Strazaka',$request["sumy"][$i]["ID"], \PDO::PARAM_INT);
          $stmt->bindValue(':rok',$rok, \PDO::PARAM_INT);
          $stmt->bindValue(':polowaRoku',$polowaRoku, \PDO::PARAM_INT);
          $stmt->execute();
        }



       $conn->exec("TRUNCATE TABLE kopia");
       return new Response ( "Done");
      }
}
