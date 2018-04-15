<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM places ";
$result=mysqli_query($databaseconnect,$q);
$place_id=$_GET['place_id'];


// $qdel1="SELECT place_image1 FROM places WHERE place_id='$place_id'";
// $resdel1=mysqli_query($databaseconnect,$qdel1);
// $place_image1=mysqli_fetch_array($resdel1,MYSQLI_NUM);
// $filename1=$place_image1[0];
// @unlink('upload/places/'.$filename1);


// $qdel2="SELECT place_image2 FROM places WHERE place_id='$place_id'";
// $resdel2=mysqli_query($databaseconnect,$qdel2);
// $place_image2=mysqli_fetch_array($resdel2,MYSQLI_NUM);
// $filename2=$place_image2[0];
// @unlink('upload/places/'.$filename2);


// $qdel3="SELECT place_image3 FROM places WHERE place_id='$place_id'";
// $resdel3=mysqli_query($databaseconnect,$qdel3);
// $place_image3=mysqli_fetch_array($resdel3,MYSQLI_NUM);
// $filename3=$place_image3[0];
// @unlink('upload/places/'.$filename3);





$q="DELETE FROM places WHERE place_id='$place_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManagePlaces.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
