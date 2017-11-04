<?php
	$databaseconnect=mysqli_connect('localhost','root','','bru') or die('Connect Error'.mysqli_connect_error());
		mysqli_set_charset($databaseconnect,'utf8');