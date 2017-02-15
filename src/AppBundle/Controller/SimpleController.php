<?php
/**
 * Created by PhpStorm.
 * User: Mateusz
 * Date: 2016-05-04
 * Time: 11:02
 */

namespace AppBundle\Controller;
use \DateTime;

include 'StrazakController.php';
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;




class SimpleController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        return $this->redirectToRoute('allStrazacy');

    }



    /**
     * @Route ("/genForm", name="genForm")
     */
    public function generujFormularz(Request $request)
    {
        return $this->render('formularzTworzenie.php.twig');
    }





    /**
     * @Route("/przydzielaniePoKolei/{redirected}", name="generateOneAfterOne")
     */

    public function przydzielaniePoKolei(Request $request, $redirected = 0)
    {
      $session= $request->getSession();

      $conn = $this->get('database_connection');

      $strazacy = $conn->fetchAll('SELECT * FROM strazak WHERE Aktywny > 0');

      if(empty($strazacy))
      {
        return $this->redirectToRoute('allStrazacy');
      }

      //jeżeli ktoś wyszedł z okna przydzielania i nie zapisał stanu
      if(($conn->fetchAll("SELECT * FROM  `kopia`"))!=FALSE)
      {

        $firstMonthYearDate = $conn->fetchAssoc("SELECT Data, MONTH(Data) as Miesiac, YEAR(Data) as Rok FROM kopia ORDER BY Data LIMIT 1");
        $firstDate=$firstMonthYearDate['Data'];
        $miesiac=$firstMonthYearDate['Miesiac'];
        $rok=$firstMonthYearDate['Rok'];

        $pierwszyDzienSzablon= $conn->fetchAll("SELECT * FROM kopia WHERE Data = '$firstDate'");

        foreach ($pierwszyDzienSzablon as $key => $value)
        {
          if($value['Ilosc_godzin']>0)
            {
              $pierwszyDzien= $value['Ilosc_godzin'];
              break;
            }
          else {
            $pierwszyDzien=0;
          }
        }

        $ostatniDzien= $pierwszyDzien-8;

        if($ostatniDzien<0)
        {
          $ostatniDzien=16;
        }


        return $this->redirectToRoute('editTable', array('miesiac' =>$miesiac ,'rok'=>$rok, 'ostatniDzien'=>$ostatniDzien ));
      }

      $lastDate = $conn->fetchColumn("SELECT Data FROM grafik ORDER BY Data DESC LIMIT 1");



      if($lastDate == FALSE && $redirected==0)
      {
        return $this->redirectToRoute('genForm');
      }
      else if($lastDate== FALSE && $redirected == 1)
      {
        $miesiac = $_POST["miesiac"];
        $rok = $_POST["rok"];
        $iloscGodzin = $_POST["iloscGodzin"];
        $ostatniDzien = $_POST["ostatniDzien"];
      }
      else
      {
        $ostatniDzienSzablon= $conn->fetchAll("SELECT * FROM grafik WHERE Data = '$lastDate'");

        $lastDate= new DateTime($lastDate);
        $lastDate= new DateTime($lastDate->format('Y-m'));
        $lastDate->add(new \DateInterval('P1M'));
        $rok = intval($lastDate->format('Y'));
        $miesiac = intval($lastDate->format('m'));



        foreach ($ostatniDzienSzablon as $key => $value)
        {
          if($value['Ilosc_godzin']>0)
            {
              $ostatniDzien= $value['Ilosc_godzin'];
              break;
            }
          else {
            $ostatniDzien=0;
          }
        }
        //$ostatniDzien = 0;//połączyć z bazą i sprawdzić

      }


      $iloscGodzin = $session->get('Ilosc_godzin');



      $iloscDni= cal_days_in_month(CAL_GREGORIAN,$miesiac,$rok);





      //nazwiska
      foreach ($strazacy as $strazak)
      {
          $IDs[]= $strazak["ID"];
      }

      $zmienna = Tablica::wypelnienie2(count($strazacy), $iloscDni, $ostatniDzien);
      $szablon = $zmienna;
      $zmienna = Tablica::przydzielanie($zmienna, $iloscGodzin);


        for($j=0;$j<count($szablon[0]);$j++)
          {


            $godziny= $szablon[0][$j];



            $conn->exec("INSERT INTO szablon (Ilosc_godzin)
            VALUES ('$godziny');");
          }

      for($i=0;$i<count($zmienna);$i++)
        for($j=0;$j<count($zmienna[0]);$j++)
          {
            $dzien=$j+1;
            $ID= $IDs[$i];


            $data = new DateTime();
            $data->setDate($rok, $miesiac, $dzien);
            $data = $data->format('Y-m-d');

            $godziny= $zmienna[$i][$j];



            $conn->exec("INSERT INTO kopia (ID_Strazaka,Data,Ilosc_godzin)
            VALUES ('$ID','$data','$godziny');");
          }

//Ustawianie pierwszego dnia miesiąca, jeżeli strażak nie szedł dzień wcześniej na służbę, a w tym dniu jego zmiana szła na 16 godzin, automatycznie nie idzie on na służbę wcale
      if(isset($ostatniDzienSzablon) && $ostatniDzien==16)
      {
          $stmt = $conn->prepare('UPDATE `kopia` SET `Ilosc_godzin`= :Ilosc_godzin WHERE `Data`= :Data AND `ID_Strazaka`= :ID_Strazaka ');
          $data = new DateTime();
          $data->setDate($rok, $miesiac, 1);
          $data = $data->format('Y-m-d');
          foreach ($ostatniDzienSzablon as $key => $value)
        {
          if($value['Ilosc_godzin']== 0)
          {

            $stmt->bindValue(':Ilosc_godzin',0,\PDO::PARAM_INT);
            $stmt->bindValue(':Data',$data,\PDO::PARAM_STR);
            $stmt->bindValue(':ID_Strazaka',$value['ID'],\PDO::PARAM_INT);
            $stmt->execute();
          }
        }
    }


      return $this->redirectToRoute('editTable', array('miesiac' =>$miesiac ,'rok'=>$rok, 'ostatniDzien'=>$ostatniDzien ));
    }

    /**
     * @Route ("/edit/{miesiac}/{rok}/{ostatniDzien}", name="editTable")
     */
     public function edit($miesiac,$rok,$ostatniDzien)
     {
       $dni = cal_days_in_month(CAL_GREGORIAN,$miesiac,$rok);
       $miesiace= array("Styczeń","Luty",'Marzec',"Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień");
       return $this->render('edycja.html.twig', array('miesiac' => $miesiac,'rok'=> $rok,'dni'=>$dni,'ostatniDzien'=> $ostatniDzien,'nazwaMiesiaca'=>$miesiace[$miesiac-1] ));
     }

     /**
      * @Route ("/przejscie", name="przejscie")
      */
      public function przejscie()
      {
        return $this->render('przejscie.html.twig');
      }

      /**
       * @Route ("/ustawienia", name="ustawienia")
       */
      public function ustawienia()
      {
        $conn= $this->get('database_connection');
        $stanowiska= $conn->fetchAll("SELECT * FROM `stanowiska`");
        $ustawienia = $conn->fetchAll("SELECT * FROM `ustawienia`");
        $uprawnienia = $conn->fetchAll("SELECT * FROM `uprawnienia_dodatkowe`");
        return $this->render('ustawienia.html.twig',array('stanowiska'=> $stanowiska, 'ustawienia'=> $ustawienia, 'uprawnienia'=>$uprawnienia));
      }

      /**
       * @Route ("/ustawienia/set", name="ustawieniaSet")
       */
       public function ustawieniaSet()
       {
         $ustawieniaStanowisk= $_POST['stanowisko'];
         $ustawieniaIlosc= $_POST['opcja'];
         $ustawieniaUprawnien = $_POST['uprawnienie'];


         $conn = $this->get('database_connection');
         $stmt = $conn->prepare("UPDATE `stanowiska` SET `Minimum`= :Minimum WHERE `ID`= :ID");
//Ustawianie minimalnej liczby pracowników z określonym stanowiskiem
         foreach ($ustawieniaStanowisk as $key => $value)
         {
             $stmt->bindValue(':Minimum',intval($value),\PDO::PARAM_INT);
             $stmt->bindValue(':ID',$key,\PDO::PARAM_INT);
             $stmt->execute();
         }


         $stmt = $conn->prepare("UPDATE `ustawienia` SET `Minimum`= :Minimum WHERE `ID`= :ID");

           foreach ($ustawieniaIlosc as $key => $value)
           {
             $stmt->bindValue(':Minimum',intval($value),\PDO::PARAM_INT);
             $stmt->bindValue(':ID',$key,\PDO::PARAM_INT);
             $stmt->execute();
           }


          $stmt = $conn->prepare("UPDATE `uprawnienia_dodatkowe` SET `Minimum`= :Minimum WHERE `ID`= :ID");
           foreach ($ustawieniaUprawnien as $key => $value)
           {
             $stmt->bindValue(':Minimum',intval($value),\PDO::PARAM_INT);
             $stmt->bindValue(':ID',$key,\PDO::PARAM_INT);
             $stmt->execute();
           }


         return $this->redirectToRoute('ustawienia');
       }

       /**
        * @Route ("/polrocze", name="wyborPolrocza")
        */
        public function wyborPolrocza()
        {
          $conn= $this->get('database_connection');

          $tablicaLat= $conn->fetchAll("SELECT DISTINCT YEAR(grafik.Data) AS Rok FROM grafik");

          return $this->render('wyborRoku.html.twig', array('tablicaLat'=>$tablicaLat));
        }

        /**
         * @Route ("/wyswietleniePolrocza", name="wyswietleniePolrocza")
         */

         public function wyswietleniePolrocza()
         {
           $rok= $_POST['rok'];
           $polowaRoku= $_POST['polowaRoku'];
           return $this->render('wyswietleniePolrocza.html.twig', array('rok'=>$rok, 'polowaRoku'=>$polowaRoku));
         }

         /**
          * @Route ("/uprawnienia/addForm", name="dodawanieUprawnienFormularz")
          */

          public function dodawanieUprawnienFormularz()
          {
            return $this->render('uprawnieniaForm.html.twig');
          }

          /**
           * @Route ("/uprawnienia/add", name="dodawanieUprawnien")
           */

           public function dodawanieUprawnien()
           {
             $conn= $this->get('database_connection');
             $uprawnienie= $_POST['uprawnienie'];
             $minimum= $_POST['minimum'];
             $stmt= $conn->prepare("INSERT INTO `uprawnienia_dodatkowe`(`Nazwa`, `Minimum`) VALUES (:Nazwa,:Minimum)");
             $stmt->bindValue(':Nazwa',$uprawnienie,\PDO::PARAM_INT);
             $stmt->bindValue(':Minimum',$minimum,\PDO::PARAM_INT);
             $stmt->execute();

             return $this->redirectToRoute('dodawanieUprawnienFormularz');
           }

}
