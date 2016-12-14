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
     * @Route("/wyswietlenie/{dni}/{zmiana}/{wymaganaIloscGodzin}",  name="show")
     */
    public function wyswietlenie(Request $request, $dni, $zmiana, $wymaganaIloscGodzin)
    {
        $conn = $this->get('database_connection');
        $strazacy = $conn->fetchAll('SELECT * FROM strazak');

        $bilans= array();
        $nazwiska= array();
        $IDs = array();

        foreach ($strazacy as $strazak)
        {
            $nazwiska[]=$strazak["Imie"]." ".$strazak["Nazwisko"];
            $IDs[]= $strazak["ID"];
        }

        for ($i=0;$i<17;$i++)
        {$bilans[$i]=rand(0,21);}

        $zmienna= Tablica::wypelnienie(count($strazacy),$dni,$zmiana);

        $zmienna= Tablica::przydzielanie($zmienna,$bilans, $wymaganaIloscGodzin);
       // Tablica::wyswietlenie($nazwiska, $zmienna);
        $session= $request->getSession();
        $session->set('tablica',$zmienna);
        $session->set('IDs',$IDs);
        return $this->render('tomasz_terka.php.twig', array('nazwiska' => $nazwiska, 'zmienna'=>$zmienna, 'IDs'=>$IDs));


    }



    /**
     * @Route("/dodawanie", name="add")
     */
    public function dodajMiesac( Request $request)
    {
        $conn = $this->get('database_connection');


        $session= $request->getSession();
        $tablica = $session->get('tablica');
        $Ids = $session->get('IDs');


        for($i=0;$i<count($tablica);$i++)
        {

            for ($j=0; $j<count($tablica[0])-1;$j++)
            {
                $id=$Ids[$i];
                $ilosc_godzin= $tablica[$i][$j];
                $conn->exec("INSERT INTO panstallman (ID_Strazaka,Dzien,Ilosc_godzin)
                VALUES ($id,$j, $ilosc_godzin );" );

            }

        }
            $session->set('tablica', null);
           return $this->redirectToRoute('akcja');
        //return $this->render('base.twig');
    }

    /**
     * @Route ("/akcja", name="akcja")
     */
    public function akcja()
    {

        return $this->render('akcja.html.twig');
    }

    /**
     * @Route ("/genForm", name="genForm")
     */
    public function generujFormularz(Request $request)
    {
        return $this->render('formularzTworzenie.php.twig');
    }


    /**
     * @Route("/wyswietleniePolRoku", name="showHalfYear")
     */

    public function przydzielaniePolRoku(Request $request)
    {

        $polowaRoku = $_POST["optradio"];
        $rok = $_POST["rok"];
        $iloscGodzin = $_POST["iloscGodzin"];
        $zmiana = $_POST["zmiana"];
        $ostatniDzien = 0;//połączyć z bazą i sprawdzić

        $bilans = array();
        $nazwiska = array();
        $IDs= array();

        for($i=0;$i<20;$i++){$bilans[$i]=0;}
        $poczatek=0;
        $tablicaIlosciDni = array();
        $tablicaCala= array();
        if ($polowaRoku==1)
        {
            $poczatek=1;
        }
        else
        {
            $poczatek=7;

        }

        for($i=0;$i<6;$i++)
        {
            $tablicaIlosciDni[]+=cal_days_in_month(CAL_GREGORIAN,$poczatek,$rok);
            $poczatek++;
        }

        $conn = $this->get('database_connection');
        $strazacy = $conn->fetchAll('SELECT * FROM strazak');
        //nazwiska
        foreach ($strazacy as $strazak)
        {
            $nazwiska[]=$strazak["Imie"]." ".$strazak["Nazwisko"];
            $IDs[]= $strazak["ID"];
        }

        for($i=0; $i<count($tablicaIlosciDni);$i++)
        {
            //if($i>0)$zmiana=0;
            $zmienna = Tablica::wypelnienie2(count($strazacy), $tablicaIlosciDni[$i], $ostatniDzien);
            $ostatniDzien = $zmienna[0][(count($zmienna[0]))-1];
            $zmienna = Tablica::przydzielanie($zmienna, $bilans, $iloscGodzin);

            array_push($tablicaCala, $zmienna);
        }


        $session= $request->getSession();
        $session->set('tablica',$tablicaCala);
        $session->set('IDs',$IDs);




        return $this->render('grafik.php.twig', array('nazwiska' => $nazwiska, 'zmienna'=>$tablicaCala, 'IDs'=>$IDs));
    }

    /**
     * @Route("/przydzielaniePoKolei/{redirected}", name="generateOneAfterOne")
     */

    public function przydzielaniePoKolei(Request $request, $redirected = 0)
    {
      $session= $request->getSession();

      $conn = $this->get('database_connection');

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
        $ostatniDzien = 0;
      }
      else
      {
        $lastDate= new DateTime($lastDate);
        $lastDate= new DateTime($lastDate->format('Y-m'));
        $lastDate->add(new \DateInterval('P1M'));
        $rok = intval($lastDate->format('Y'));
        $miesiac = intval($lastDate->format('m'));
        $ostatniDzien = 0;//połączyć z bazą i sprawdzić
      }


      $iloscGodzin = $session->get('Ilosc_godzin');



      $bilans = array();
      $nazwiska = array();
      $IDs= array();

      for($i=0;$i<20;$i++){$bilans[$i]=0;}

      $iloscDni = 0;
      $tablicaCala= array();




          $iloscDni+=cal_days_in_month(CAL_GREGORIAN,$miesiac,$rok);




      $strazacy = $conn->fetchAll('SELECT * FROM strazak');
      //nazwiska
      foreach ($strazacy as $strazak)
      {
          $nazwiska[]=$strazak["Imie"]." ".$strazak["Nazwisko"];
          $IDs[]= $strazak["ID"];
      }

      $zmienna = Tablica::wypelnienie2(count($strazacy), $iloscDni, $ostatniDzien);
      $ostatniDzien = $zmienna[0][(count($zmienna[0]))-1];
      $zmienna = Tablica::przydzielanie($zmienna, $bilans, $iloscGodzin);

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


      return $this->redirectToRoute('editTable', array('miesiac' =>$miesiac ,'rok'=>$rok ));
    }

    /**
     * @Route ("/edit/{miesiac}/{rok}", name="editTable")
     */
     public function edit($miesiac,$rok)
     {
       $dni = cal_days_in_month(CAL_GREGORIAN,$miesiac,$rok);
       $miesiace= array("Styczeń","Luty",'Marzec',"Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień");
       return $this->render('edycja.html.twig', array('miesiac' => $miesiac,'rok'=> $rok,'dni'=>$dni,'nazwaMiesiaca'=>$miesiace[$miesiac-1] ));
     }





}
