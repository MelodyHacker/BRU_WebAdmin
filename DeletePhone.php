<?php
require 'ConnectDataBase.php';
$phone_id=$_GET['phone_id'];


$qdel1="SELECT event_image1 FROM phones WHERE phone_id='$phone_id'";
$resdel1=mysqli_query($databaseconnect,$qdel1);
$event_image1=mysqli_fetch_array($resdel1,MYSQLI_NUM);
$filename1=$event_image1[0];
@unlink('upload/phones/'.$filename1);






$q="DELETE FROM phones WHERE phone_id='$phone_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManagePhones.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
