<?php 
require 'ConnectDataBase.php';
$admin_id=$_GET['admin_id'];
$q="SELECT*FROM  admins WHERE admin_id='$admin_id'";
$res=mysqli_query($databaseconnect,$q);
$rowplace=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ceate ID and PassWord</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>




  <title>Ceate ID and PassWord</title>
</head>
<body>


  <br>



  <form action="UpdateAdmin.php"  method="post">
    <!--up load-->
    <div class="container">
      <h2>Ceate ID and PassWord</h2>
      <br> 


      <table>
        <br>

        <th> 
          <label>Name Admin:</label>

          <input type=text class="form-control" name="admin_name" id="admin_name" maxlength="50" value="<?php echo $rowplace['admin_name'];?>">
          <br>
          <label>ID:</label>

          <input type=text class="form-control" name="admin_input_id" id="admin_input_id" maxlength="50" value="<?php echo $rowplace['admin_input_id'];?>">
          <br>
          <label>PassWord:</label>

          <input type=te class="form-control" name="admin_input_pass" id="admin_input_pass" maxlength="50" value="<?php echo $rowplace['admin_input_pass'];?>">
          <br>

        </th>  

      </table>
      <div class="alert alert-danger">
        <strong>Warning!!! </strong>Please check ID and PassWord before Confirm 
      </div>

        <input type="hidden" name="admin_id" value="<?php echo $rowplace['admin_id'];?>">
      <input type="submit" name="submit" class="btn btn-default" value=" Confirm !!! " >
    </form>




     <!--  <label>Name Place:</label>

      <input type=text class="form-control" name="place_name" id="place_name" maxlength="50" placeholder="Name Place" value="<?php echo $rowplace['place_name'];?>">

      <br>

  
      <br>
      <label>Lat-Location:</label>
      <input type="text" class="form-control" name="lat_location" id="lat_location"  value="<?php echo $rowplace['lat_location'];?>">

      <br>
      <label>Long-Location:</label>
      <input type="text" class="form-control" name="long_location" id="long_location"  value="<?php echo $rowplace['long_location'];?>">
 -->




    <script type="text/javascript">
      // nultiple initialize
      $('.fileme').filestyle({
        btnClass : 'btn-primary'
      });

    </script>





  </body>
  </html>



