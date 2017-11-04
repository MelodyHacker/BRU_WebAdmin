<?php	
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "bru";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

mysqli_set_charset($objCon,"utf8");


$sql = "SELECT * FROM events";
$query = mysqli_query($objCon,$sql);
if (!$query) {
	printf("Error: %s\n", $objCon->error);
	exit();
}
$resultArray = array();


while($result =mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	array_push($resultArray,$result);
	
}
mysqli_close($objCon);
echo json_encode(array('events' => $resultArray), JSON_UNESCAPED_UNICODE);
?>










