<?php include('ConnectDataBase.php');
$report_name=($_POST['data']);
if ($report_name=="") {

	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Insert Description Pleas')
		window.location.href='Report.php';
		</SCRIPT>");

}
else{
	$q="INSERT INTO reports (report_name) VALUES ('$report_name')";
	$result=mysqli_query($databaseconnect,$q);

	if ($result) {

		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert(' Succesfully Send ')
			window.location.href='Report.php';
			</SCRIPT>");

	}else{
		echo "error insert ".mysqli_errno($databaseconnect);
	}
}

mysqli_close($databaseconnect);

?>