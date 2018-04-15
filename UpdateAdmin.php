<?php
require 'ConnectDataBase.php';
$admin_id=$_POST['admin_id'];
$admin_name=$_POST['admin_name'];
$admin_input_id=$_POST['admin_input_id'];
$admin_input_pass=$_POST['admin_input_pass'];


$q= "UPDATE admins SET admin_name='$admin_name',admin_input_id='$admin_input_id',admin_input_pass='$admin_input_pass' WHERE admin_id='$admin_id'";
$result=mysqli_query($databaseconnect,$q);


if ($result) {

	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert(' Succesfully Edit Admin')
		window.location.href='ManageAdmins.php';
		</SCRIPT>");

}else
{
	echo "Error".mysqli_error($databasecsonnect);
}

mysqli_close($databaseconnect);
?>