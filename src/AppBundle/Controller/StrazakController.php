<?php
/**
 * Created by PhpStorm.
 * User: Mateusz
 * Date: 2016-05-04
 * Time: 11:02
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;




class StrazakController extends Controller
{


    /**
     * @Route("/allStrazacy", name="allStrazacy")
     */
    public function showAll()

    {
        $conn= $this->get('database_connection');

        $strazacy = $conn->fetchAll('SELECT strazak.ID, strazak.Imie, strazak.Nazwisko, strazak_stanowisko.ID_Strazaka, strazak_stanowisko.ID_Stanowiska , stanowiska.Nazwa AS Nazwa_Stanowiska FROM strazak JOIN strazak_stanowisko ON strazak.ID=strazak_stanowisko.ID_Strazaka JOIN stanowiska ON strazak_stanowisko.ID_Stanowiska=stanowiska.ID ORDER BY ID_Stanowiska');
        $stanowiska = $conn->fetchAll('SELECT * FROM stanowiska');
        $uprawnienia = $conn->fetchAll('SELECT * FROM uprawnienia_dodatkowe');
        $strazak_uprawnienia = $conn->fetchAll('SELECT * FROM strazak_uprawnienieDodatkowe');
        return $this->render('showAllStrazacy.php.twig', array('strazacy'=>$strazacy, 'stanowiska'=>$stanowiska, 'uprawnienia'=>$uprawnienia, 'strazak_uprawnienia'=>$strazak_uprawnienia));

    }

    /**
     * @Route("/delete/{idStrazaka}", name="delete")
     */

    public function deleteStrazak($idStrazaka)
    {
        $conn= $this->get('database_connection');

        $conn->exec(" INSERT INTO strazak_archiwum
          SELECT * FROM strazak WHERE ID = $idStrazaka;  ");

        $conn->exec("DELETE FROM strazak
                      WHERE ID = $idStrazaka ");

        return $this->redirectToRoute('allStrazacy');
    }

    /**
     * @Route("/addStrazak", name="addStrazak")
     */
    public function addStrazak()
    {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $stanowisko = $_POST["stanowisko"];

        $conn = $this->get('database_connection');

        $stmt = $conn->prepare("INSERT INTO `strazak` (`Imie` ,`Nazwisko`)
                VALUES (:Imie,:Nazwisko)");

        $stmt -> bindValue(':Imie', $imie, \PDO::PARAM_STR);
        $stmt -> bindValue(':Nazwisko', $nazwisko, \PDO::PARAM_STR);

        $stmt -> execute();


        $lastInserted= $conn->fetchColumn("SELECT LAST_INSERT_ID()");

        $stmt = $conn->prepare("INSERT INTO `strazak_stanowisko` (`ID_Strazaka` ,`ID_Stanowiska`)
                VALUES (:ID_Strazaka,:ID_Stanowiska)");
        $stmt -> bindValue(':ID_Strazaka', $lastInserted, \PDO::PARAM_INT);
        $stmt -> bindValue(':ID_Stanowiska', $stanowisko, \PDO::PARAM_INT);
        $stmt ->execute();

        if(isset($_POST['uprawnienie']))
        {
          $stmt = $conn->prepare("INSERT INTO `strazak_uprawnienieDodatkowe` (`ID_Strazaka`, `ID_Uprawnienia`) VALUES (:ID_Strazaka, :ID_Uprawnienia)");
          $stmt -> bindValue(':ID_Strazaka', $lastInserted, \PDO::PARAM_STR);
          foreach ($_POST['uprawnienie'] as $uprawnienie)
          {
            $stmt -> bindValue(':ID_Uprawnienia', $uprawnienie, \PDO::PARAM_STR);
            $stmt -> execute();
          }
        }

        return $this->redirectToRoute('allStrazacy');
    }

    /**
     * @Route("/editStrazak/{id}", name="editStrazak")
     */

    public function editStrazak($id)
    {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $stanowisko = $_POST["stanowisko"];

        $conn = $this->get('database_connection');

        $stmt = $conn->prepare("UPDATE strazak
                     SET Imie=:Imie, Nazwisko=:Nazwisko
                     WHERE ID=:ID");

        $stmt -> bindValue(':Imie', $imie, \PDO::PARAM_STR);
        $stmt -> bindValue(':Nazwisko', $nazwisko, \PDO::PARAM_STR);
        $stmt -> bindValue(':ID', $id, \PDO::PARAM_STR);
        $stmt -> execute();

        $stmt = $conn->prepare("UPDATE strazak_stanowisko
                     SET ID_Stanowiska = :ID_Stanowiska
                     WHERE ID_Strazaka=:ID_Strazaka");

        $stmt -> bindValue(':ID_Stanowiska', $stanowisko, \PDO::PARAM_STR);
        $stmt -> bindValue(':ID_Strazaka', $id, \PDO::PARAM_STR);
        $stmt -> execute();


        $conn->exec("DELETE FROM `strazak_uprawnienieDodatkowe`
                      WHERE ID_Strazaka = $id ");

        if(isset($_POST['uprawnienie']))
        {
          $stmt = $conn->prepare("INSERT INTO `strazak_uprawnienieDodatkowe` (`ID_Strazaka`, `ID_Uprawnienia`) VALUES (:ID_Strazaka, :ID_Uprawnienia)");
          $stmt -> bindValue(':ID_Strazaka', $id, \PDO::PARAM_STR);
          foreach ($_POST['uprawnienie'] as $uprawnienie)
          {
            $stmt -> bindValue(':ID_Uprawnienia', $uprawnienie, \PDO::PARAM_STR);
            $stmt -> execute();
          }
        }

      return  $this->redirectToRoute('allStrazacy');

    }



}
