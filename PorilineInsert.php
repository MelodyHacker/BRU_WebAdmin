<?php
require 'ConnectDataBase.php';
$poriline_name=$_POST['poriline_name'];
$poriline_lat=$_POST['lat'];
$poriline_long=$_POST['lng'];



if ($poriline_name=='' or$poriline_lat=='' or $poriline_long=='') {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Can not Save check insert please')
		window.location.href='CeatePlace.php';
		</SCRIPT>");
	exit();
}else{
  $q="INSERT INTO poriline (poriline_name,poriline_lat,poriline_long) VALUES ('$poriline_name','$poriline_lat','$poriline_long')";


	$result=mysqli_query($databaseconnect,$q);

	if ($result) {

		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert(' Succesfully Save')
			window.location.href='CeatePoriline.php';
			</SCRIPT>");
	}else{
		echo "error insert ".mysqli_errno($databaseconnect);
	}




	mysqli_close($databaseconnect);
}
?>