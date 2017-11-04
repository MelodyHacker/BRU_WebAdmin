<?php
require 'ConnectDataBase.php';
$news_id=$_POST['news_id'];
$news_name=$_POST['news_name'];
$news_description=$_POST['news_description'];
$start_news=$_POST['start_news'];
$end_news=$_POST['end_news'];


$q= "UPDATE news SET news_name='$news_name',news_description='$news_description',start_news='$start_news',end_news='$end_news' WHERE news_id='$news_id'";
$result=mysqli_query($databaseconnect,$q);


if ($result) {

	header("Location:ManageNews.php");
}else
{
	echo "Error".mysqli_error($databasecsonnect);
}

mysqli_close($databaseconnect);
?>