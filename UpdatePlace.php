<?php
require 'ConnectDataBase.php';
$place_id=$_POST['place_id'];
$place_name=$_POST['place_name'];
$lat_location=$_POST['lat_location'];
$long_location=$_POST['long_location'];


$q= "UPDATE places SET place_name='$place_name',lat_location='$lat_location',long_location='$long_location' WHERE place_id='$place_id'";
$result=mysqli_query($databaseconnect,$q);


if ($result) {
 header("Location:ManagePlaces.php");
}else
{
	echo "Error".mysqli_error($databasecsonnect);
}

mysqli_close($databaseconnect);
?>