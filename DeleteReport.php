<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM reports ";
$result=mysqli_query($databaseconnect,$q);
$report_id=$_GET['report_id'];



$q="DELETE FROM reports WHERE report_id='$report_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:AllReport.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
