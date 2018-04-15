<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM toilets ";
$result=mysqli_query($databaseconnect,$q);
$toilet_id=$_GET['toilet_id'];



$q="DELETE FROM toilets WHERE toilet_id='$toilet_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManageToilets.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
