<?php
require 'ConnectDataBase.php';
$place_name=$_POST['place_name'];
$lat_location=$_POST['lat'];
$long_location=$_POST['lng'];



if ($place_name=='' or$lat_location=='' or $long_location=='') {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Can not Save check insert please')
		window.location.href='CeatePlace.php';
		</SCRIPT>");
	exit();
}else{
  $q="INSERT INTO places (place_name,lat_location,long_location) VALUES ('$place_name','$lat_location','$long_location')";


	$result=mysqli_query($databaseconnect,$q);

	if ($result) {

		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert(' Succesfully Save')
			window.location.href='Ceateplace.php';
			</SCRIPT>");
	}else{
		echo "error insert ".mysqli_errno($databaseconnect);
	}




	mysqli_close($databaseconnect);
}
?>