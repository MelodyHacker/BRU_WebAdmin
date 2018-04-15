<?php
// $serverName = "localhost";
// $userName = "root";
// $userPassword = "";
// $dbName = "bru";

// $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

mysqli_set_charset($databaseconnect,"utf8");


$sql = "SELECT * FROM phones";
$query = mysqli_query($databaseconnect,$sql);
if (!$query) {
	printf("Error: %s\n", $databaseconnect->error);
	exit();
}
$resultArray = array();


while($result =mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	array_push($resultArray,$result);

}
mysqli_close($databaseconnect);
echo json_encode(array('phones' => $resultArray), JSON_UNESCAPED_UNICODE);
?>
