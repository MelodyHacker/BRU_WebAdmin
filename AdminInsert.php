<?php
require 'ConnectDataBase.php';
$admin_name=$_POST['admin_name'];
$admin_input_id=$_POST['admin_input_id'];
$admin_input_pass=$_POST['admin_input_pass'];
$admin_input_conpass=$_POST['admin_input_conpass'];



if ($admin_name=='' or$admin_input_id=='' or $admin_input_pass=='' or $admin_input_conpass!=$admin_input_pass) {
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Can not Save check insert please')
    window.location.href='CeateAdmin.php';
    </SCRIPT>");
  exit();
}else{

  $q="INSERT INTO admins (admin_name,admin_input_id,admin_input_pass) VALUES ('$admin_name','$admin_input_id','$admin_input_pass')";



  $result=mysqli_query($databaseconnect,$q);




  if ($result) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert(' Succesfully Save')
      window.location.href='CeateAdmin.php';
      </SCRIPT>");
  }else{
    echo "error insert ".mysqli_errno($databaseconnect);
  }




  mysqli_close($databaseconnect);
}
?>