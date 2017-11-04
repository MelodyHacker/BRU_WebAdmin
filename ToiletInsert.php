<?php
require 'ConnectDataBase.php';
$name=$_POST['name'];
$lat_location=$_POST['lat'];
$long_location=$_POST['lng'];


if ($name=='' or$lat_location=='' or $long_location=='') {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Can not Save check insert please')
		window.location.href='CeateToilet.php';
		</SCRIPT>");
	exit();
}else{

	$q="INSERT INTO toilets (toilet_name,toilet_lat,toilet_long) VALUES ('$name','$lat_location','$long_location')";



	$result=mysqli_query($databaseconnect,$q);




	if ($result) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert(' Succesfully Save')
			window.location.href='CeateToilet.php';
			</SCRIPT>");
	}else{
		echo "error insert ".mysqli_errno($databaseconnect);
	}




	mysqli_close($databaseconnect);
}
?>