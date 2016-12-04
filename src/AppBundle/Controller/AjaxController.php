<?php
/**
 * Created by PhpStorm.
 * User: Mateusz
 * Date: 2016-05-04
 * Time: 11:02
 */

namespace AppBundle\Controller;
use \DateTime;

//include 'StrazakController.php';
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class AjaxController extends Controller
{

    /**
     * @Route("/get/Table", name="getTable")
     */

     public function getTable()
     {
         $conn = mysqli_connect("127.0.0.1", "root", "", "straz");

        $sql = "SELECT ID, Imie, Nazwisko FROM strazak";
        $result = mysqli_query($conn, $sql);
        $myArray = array();



        if ( mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;
            }
          }

        $przydzialy=array();

        foreach($myArray as $key => $value)
          {
            $przydzialy[]= array('ImieINazwisko'=>$value['Imie']." ".$value['Nazwisko']);
          }



        $i=0;

        foreach($myArray as $key => $value)
        {

          $sql= "SELECT * FROM kopia WHERE ID_Strazaka = ".$value['ID'];
          $result = mysqli_query($conn, $sql);

          if ( mysqli_num_rows($result) > 0)
            {
              // output data of each row
              while($row = mysqli_fetch_assoc($result))
              {
                  $przydzialy[$i]['tabelka'][] = $row;
              }
            }
          $i++;
        }
        mysqli_close($conn);

        return new Response (json_encode($przydzialy));


      }

      /**
       * @Route("/set/Table", name="setTable")
       */

       public function setTable()
       {
         $postdata = file_get_contents("php://input");
          $request = json_decode($postdata, true);


          $conn = $this->get('database_connection');

          for($i=0; $i<count($request);$i++)
          {
            for($j=0;$j<count($request[$i]["tabelka"]);$j++)
            {
              $ID_Strazaka = $request[$i]["tabelka"][$j]["ID_Strazaka"];
              $Data = $request[$i]["tabelka"][$j]["Data"];
              $Ilosc_godzin = $request[$i]["tabelka"][$j]["Ilosc_godzin"];

              $conn->exec("INSERT INTO grafik (ID_Strazaka,Data,Ilosc_godzin)
              VALUES ('$ID_Strazaka','$Data','$Ilosc_godzin');");
              $conn->exec("TRUNCATE TABLE kopia");}
          }
          echo "<br>";
           return new Response ( "Done");

       }

}
