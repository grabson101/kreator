<?php
include_once '../connection.php';


if(isset($_GET['dataID']))
{
  $iloscGodzin = $_GET['iloscGodzin'];
  $dataID = $_GET['dataID'];

  $iloscGodzin-=8;

  if($iloscGodzin<0)
      $iloscGodzin=16;


  $sql = "update kopia set Ilosc_godzin='$iloscGodzin' where ID='$dataID'";

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
