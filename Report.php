<?php
require 'ConnectDataBase.php';
$report_name=$_POST['report_name'];
$q="INSERT INTO reports (report_name) VALUES ('$report_name')";
  $result=mysqli_query($databaseconnect,$q);
  mysqli_close($databaseconnect);
?>
