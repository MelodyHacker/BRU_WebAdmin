<?php
require 'ConnectDataBase.php';

////image1
$ext1=pathinfo(basename($_FILES['news_image1']['name']),PATHINFO_EXTENSION);
$new_image_name1='news_'.uniqid().".".$ext1;
$image_path1='upload/news/';
$upload_path1=$image_path1.$new_image_name1;
$success1=move_uploaded_file($_FILES['news_image1']['tmp_name'],$upload_path1);
if ($success1==FALSE) {
  $news_image1=NULL;
}else{
  $news_image1=$new_image_name1;
}

////image2
$ext2=pathinfo(basename($_FILES['news_image2']['name']),PATHINFO_EXTENSION);
$new_image_name2='news_'.uniqid().".".$ext2;
$image_path2='upload/news/';
$upload_path2=$image_path2.$new_image_name2;
$success2=move_uploaded_file($_FILES['news_image2']['tmp_name'],$upload_path2);
if ($success2==FALSE) {
  $news_image2=NULL;
}else{
  $news_image2=$new_image_name2;
}

////image3
$ext3=pathinfo(basename($_FILES['news_image3']['name']),PATHINFO_EXTENSION);
$new_image_name3='news_'.uniqid().".".$ext3;
$image_path3='upload/news/';
$upload_path3=$image_path3.$new_image_name3;
$success3=move_uploaded_file($_FILES['news_image3']['tmp_name'],$upload_path3);
if ($success3==FALSE) {
  $news_image3=NULL;
}else{
  $news_image3=$new_image_name3;
}


  $q="INSERT INTO news (news_image1,news_image2,news_image3) VALUES ('$news_image1','$news_image2','$news_image3')";

  $result=mysqli_query($databaseconnect,$q);




  if ($result) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert(' Succesfully Save')
      window.location.href='CeateNews.php';
      </SCRIPT>");
  }else{
    echo "error insert ".mysqli_errno($databaseconnect);
  }




  mysqli_close($databaseconnect);

?>