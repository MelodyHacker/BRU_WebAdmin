<?php
require 'ConnectDataBase.php';
$ckday=date("Y-m-d");
mysqli_set_charset($databaseconnect,"utf8");
//////////////////////////////////////////////////////////////////
$today=explode("-",$ckday);
// echo "$koko[0]";
// echo "$koko[1]";
// echo "$koko[2]";
/////////////////////////////////////////////////////////////
$sqlall ="SELECT * FROM events";
$queryall= mysqli_query($databaseconnect,$sqlall);
if (!$queryall) {
	printf("Error: %s\n", $databaseconnect->error);
exit();
}
$resultArray = array();
while($result =mysqli_fetch_array($queryall,MYSQLI_ASSOC))
{
	$id=$result['event_id'];
	$end_event=explode("-",$result['end_event']);
	 // $id=28;
	 //         2018               2017                 2                 1									4									1
if ((int)$today[0]<=(int)$end_event[0] and (int)$today[1]<=(int)$end_event[1] and (int)$today[2]<=(int)$end_event[2]) {
	$update="UPDATE events SET event_status = '1' WHERE event_id = $id";
	$queryup = mysqli_query($databaseconnect,$update);
}else {
	$update="UPDATE events SET event_status = '0' WHERE event_id = $id";
	$queryup = mysqli_query($databaseconnect,$update);
}

}

////////////////////json_encode//////////////////////////////
$sqljson="SELECT*FROM events  LEFT JOIN places ON events.place_id_event=places.place_id WHERE event_status='1'";
//$sqljson = "SELECT * FROM events WHERE event_status='1'";
$queryjson = mysqli_query($databaseconnect,$sqljson);
if (!$queryjson) {
	printf("Error: %s\n", $databaseconnect->error);
exit();
}
$resultArray = array();
while($result =mysqli_fetch_array($queryjson,MYSQLI_ASSOC))
{
	array_push($resultArray,$result);
}
mysqli_close($databaseconnect);
echo json_encode(array('events' => $resultArray), JSON_UNESCAPED_UNICODE);
?>
