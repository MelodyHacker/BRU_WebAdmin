<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM admins ";
$result=mysqli_query($databaseconnect,$q);
$admin_id=$_GET['admin_id'];

$q="DELETE FROM admins WHERE admin_id='$admin_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManageAdmins.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
