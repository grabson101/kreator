<?php
include_once '../connection.php';

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


echo json_encode($przydzialy);

mysqli_close($conn);
?>
