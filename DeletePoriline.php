<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM poriline ";
$result=mysqli_query($databaseconnect,$q);
$poriline_id=$_GET['poriline_id'];


$q="DELETE FROM poriline WHERE poriline_id='$poriline_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManagePorilines.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
