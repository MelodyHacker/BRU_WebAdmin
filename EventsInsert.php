<?php
require 'ConnectDataBase.php';
$event_name=$_POST['event_name'];
$event_description=$_POST['event_description'];
$start_event=$_POST['start_event'];
$end_event=$_POST['end_event'];
$place_id=$_POST['place_id'];
$q="SELECT*FROM places ";
$result=mysqli_query($databaseconnect,$q);
$lat_event='';
$long_event='';
while ($rowplace=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  $chk=$rowplace['place_id']; 
  if ($chk==$place_id) {
   $lat_event= $rowplace['lat_location'];
   $long_event=$rowplace['long_location'];
 }
}





////image1
$ext1=pathinfo(basename($_FILES['event_image1']['name']),PATHINFO_EXTENSION);
$new_image_name1='event_'.uniqid().".".$ext1;
$image_path1='upload/events/';
$upload_path1=$image_path1.$new_image_name1;
$success1=move_uploaded_file($_FILES['event_image1']['tmp_name'],$upload_path1);
if ($success1==FALSE) {
  $event_image1=NULL;
}else{
  $event_image1=$new_image_name1;
}

////image2
$ext2=pathinfo(basename($_FILES['event_image2']['name']),PATHINFO_EXTENSION);
$new_image_name2='event_'.uniqid().".".$ext2;
$image_path2='upload/events/';
$upload_path2=$image_path2.$new_image_name2;
$success2=move_uploaded_file($_FILES['event_image2']['tmp_name'],$upload_path2);
if ($success2==FALSE) {
  $event_image2=NULL;
}else{
  $event_image2=$new_image_name2;
}

////image3
$ext3=pathinfo(basename($_FILES['event_image3']['name']),PATHINFO_EXTENSION);
$new_image_name3='event_'.uniqid().".".$ext3;
$image_path3='upload/events/';
$upload_path3=$image_path3.$new_image_name3;
$success3=move_uploaded_file($_FILES['event_image3']['tmp_name'],$upload_path3);
if ($success3==FALSE) {
  $event_image3=NULL;
}else{
  $event_image3=$new_image_name3;
}


if ($event_name=='' or$start_event=='' or $end_event=='' or $place_id=='') {
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Can not Save check insert please')
    window.location.href='CeateEvent.php';
    </SCRIPT>");
  exit();
}else{

  $q="INSERT INTO events (event_name,event_description,start_event,end_event,place_id,event_image1,event_image2,event_image3,lat_event,long_event) VALUES ('$event_name','$event_description','$start_event','$end_event',$place_id,'$event_image1','$event_image2','$event_image3','$lat_event','$long_event')";



  $result=mysqli_query($databaseconnect,$q);




  if ($result) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert(' Succesfully Save')
      window.location.href='CeateEvent.php';
      </SCRIPT>");
  }else{
    echo "error insert ".mysqli_errno($databaseconnect);
  }




  mysqli_close($databaseconnect);
}
?>