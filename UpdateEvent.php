<?php
require 'ConnectDataBase.php';
$event_id=$_POST['event_id'];
$event_name=$_POST['event_name'];
$event_description=$_POST['event_description'];
$start_event=$_POST['start_event'];
$end_event=$_POST['end_event'];
$place_id=$_POST['place_id'];

$q= "UPDATE events SET event_name='$event_name',event_description='$event_description',start_event='$start_event',end_event='$end_event',place_id='$place_id' WHERE event_id='$event_id'";
$result=mysqli_query($databaseconnect,$q);


if ($result) {

 header("Location:ManageEvents.php");
}else
{
	echo "Error".mysqli_error($databasecsonnect);
}

mysqli_close($databaseconnect);
?>