<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM news ";
$result=mysqli_query($databaseconnect,$q);
$news_id=$_GET['news_id'];


$qdel1="SELECT news_image1 FROM news WHERE news_id='$news_id'";
$resdel1=mysqli_query($databaseconnect,$qdel1);
$news_image1=mysqli_fetch_array($resdel1,MYSQLI_NUM);
$filename1=$news_image1[0];
@unlink('upload/news/'.$filename1);


$qdel2="SELECT news_image2 FROM news WHERE news_id='$news_id'";
$resdel2=mysqli_query($databaseconnect,$qdel2);
$news_image2=mysqli_fetch_array($resdel2,MYSQLI_NUM);
$filename2=$news_image2[0];
@unlink('upload/news/'.$filename2);


$qdel3="SELECT news_image3 FROM news WHERE news_id='$news_id'";
$resdel3=mysqli_query($databaseconnect,$qdel3);
$news_image3=mysqli_fetch_array($resdel3,MYSQLI_NUM);
$filename3=$news_image3[0];
@unlink('upload/news/'.$filename3);





$q="DELETE FROM news WHERE news_id='$news_id'";
$result=mysqli_query($databaseconnect,$q);



if ($result) {
header('Location:ManageNews.php');
}else
{
	echo "Error".mysqli_error($databaseconnect);
}

mysqli_close($databaseconnect);
