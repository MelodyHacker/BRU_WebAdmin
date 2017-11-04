<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM events ";
$result=mysqli_query($databaseconnect,$q);
$event_id=$_GET['event_id'];


$qdel1="SELECT event_image1 FROM events WHERE event_id='$event_id'";
$resdel1=mysqli_query($databaseconnect,$qdel1);
$event_image1=mysqli_fetch_array($resdel1,MYSQLI_NUM);
$filename1=$event_image1[0];
@unlink('upload/events/'.$filename1);


$qdel2="SELECT event_image2 FROM events WHERE event_id='$event_id'";
$resdel2=mysqli_query($databaseconnect,$qdel2);
$event_image2=mysqli_fetch_array($resdel2,MYSQLI_NUM);
$filename2=$event_image2[0];
@unlink('upload/events/'.$filename2);


$qdel3="SELECT event_image3 FROM events WHERE event_id='$event_id'";
$resdel3=mysqli_query($databaseconnect,$qdel3);
$event_image3=mysqli_fetch_array($resdel3,MYSQLI_NUM);
$filename3=$event_image3[0];
@unlink('upload/events/'.$filename3);





$q="DELETE FROM events WHERE event_id='$event_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManageEvents.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
