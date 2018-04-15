<?php

require 'ConnectDataBase.php';
$admin_input_id=$_POST['id'];
$admin_input_pass=$_POST['password'];


$q="SELECT*FROM admins ";
$result=mysqli_query($databaseconnect,$q);


	while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
	{
		$idck=$row['admin_input_id'];
		$pass=$row['admin_input_pass'];
		if ($admin_input_id==$idck and $admin_input_pass==$pass)
		{
			header("Location:My_BRU.php");

		}else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert(' Fail Login')
				window.location.href='index.php';
				</SCRIPT>");


		}

	}






?> 


