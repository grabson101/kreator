<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxControllerWyswietlenie extends Controller
{
  /**
   * @Route("/get/TableToShow/{rok}/{polowaRoku}", name="getPolrocze")
   */

   public function getTable($rok, $polowaRoku)
   {
     $conn= $this->get('database_connection');

     if($polowaRoku==1)
     {
       $miesiacPoczatkowy=1;
     }
     elseif ($polowaRoku==2)
     {
       $miesiacPoczatkowy=7;
     }
     $idStrazakow= $conn->fetchAll("SELECT DISTINCT ID_Strazaka FROM grafik WHERE (MONTH(Data) BETWEEN $miesiacPoczatkowy AND $miesiacPoczatkowy+5) AND YEAR(Data)=$rok");





         for($j=$miesiacPoczatkowy;$j<=($miesiacPoczatkowy+5);$j++)
         {
              $i=0;
               foreach ($idStrazakow as $key => $value)
              {
               //$tabelaPolrocza[$i]['Strazak']=$value['ID_Strazaka'];
               $id = intval($value['ID_Strazaka']);
               $miesiace[$j][$i]['strazak']=$value['ID_Strazaka'];
               $miesiace[$j][$i]['dni']=$conn->fetchAll("SELECT * FROM grafik WHERE MONTH(Data)=$j AND YEAR(Data)=$rok AND ID_Strazaka = $id");

               $i++;
             }

         }

         $strazacy= $conn->fetchAll("SELECT Imie, Nazwisko, ID FROM strazak");


        $dane= array();
        $dane['miesiace']=$miesiace;
        $dane['strazacy']= $strazacy;

     return new Response (json_encode($dane));

   }

}
