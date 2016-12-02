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
          $request = json_decode($postdata);

          //ayy karramba
           return new Response (print_r($request));

       }

}
