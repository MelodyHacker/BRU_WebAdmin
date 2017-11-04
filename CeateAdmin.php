<?php 
require 'ConnectDataBase.php';
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



  <form action="AdminInsert.php"  method="post">
    <!--up load-->
    <div class="container">
      <h2>Ceate ID and PassWord</h2>
      <br> 


      <table>
        <br>

        <th> 
          <label>Name Admin:</label>

          <input type=text class="form-control" name="admin_name" id="admin_name" maxlength="50" placeholder="Name Admin">
          <br>
          <label>ID:</label>

          <input type=text class="form-control" name="admin_input_id" id="admin_input_id" maxlength="50" placeholder="ID Admin">
          <br>
          <label>PassWord:</label>

          <input type="password" class="form-control" name="admin_input_pass" id="admin_input_pass" maxlength="50" placeholder="PassWord Admin">
          <br>
          <label>Confirm PassWord:</label>

          <input type="password" class="form-control" name="admin_input_conpass" id="admin_input_pass" maxlength="50" placeholder="PassWord Admin">
          <br>
        </th>  

      </table>
      <div class="alert alert-danger">
        <strong>Warning!!! </strong>Please check ID and PassWord before Confirm 
      </div>
      <table>
      <input type="submit" name="submit" class="btn btn-default" value=" Confirm !!! " >
    </form>
     &nbsp;
      <form action="My_BRU.php">
       <input type="submit"  class="btn btn-default" value="Home ">
     </form>
         &nbsp;
      <form action="ManageAdmins.php">
        <input type="submit" class="btn btn-default"  value="Manage Admin">
      </form> 


</table>




    <script type="text/javascript">
      // nultiple initialize
      $('.fileme').filestyle({
        btnClass : 'btn-primary'
      });

    </script>





  </body>
  </html>



