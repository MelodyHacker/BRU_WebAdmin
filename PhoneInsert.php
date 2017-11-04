<?php
require 'ConnectDataBase.php';
$phone_name=$_POST['phone_name'];
$phone_number=$_POST['phone_number'];
// $q="SELECT*FROM phones ";
$result=mysqli_query($databaseconnect,$q);


////image1
$ext1=pathinfo(basename($_FILES['image_phone']['name']),PATHINFO_EXTENSION);
$new_image_name1='phone_'.uniqid().".".$ext1;
$image_path1='upload/phones/';
$upload_path1=$image_path1.$new_image_name1;
$success1=move_uploaded_file($_FILES['image_phone']['tmp_name'],$upload_path1);
if ($success1==FALSE) {
  $image_phone=NULL;
}else{
  $image_phone=$new_image_name1;
}


if ($phone_name=='' or$phone_number=='') {
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Can not Save check insert please')
    window.location.href='CeatePhone.php';
    </SCRIPT>");
  exit();
}else{

  $q="INSERT INTO phones (phone_name,phone_number,image_phone) VALUES ('$phone_name','$phone_number','$image_phone')";


  $result=mysqli_query($databaseconnect,$q);




  if ($result) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert(' Succesfully Save')
      window.location.href='CeatePhone.php';
      </SCRIPT>");
  }else{
    echo "error insert ".mysqli_errno($databaseconnect);
  }




  mysqli_close($databaseconnect);
}
?>