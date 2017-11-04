<?php 
require 'ConnectDataBase.php';
$q="SELECT*FROM places ";
$result=mysqli_query($databaseconnect,$q)

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ceate Event</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>




  <title>Ceate Event</title>
</head>
<body>


  <br>



  <form action="EventsInsert.php" enctype="multipart/form-data" method="post">
    <!--up load-->
    <div class="container">
      <h2>Ceate Event</h2>
      <br> 


      <table>
        <br>

        <th> <label>Name Event:</label>

          <input type=text class="form-control" name="event_name" id="event_name" maxlength="50" placeholder="Name Event">

          <br>


          <label>Start Event:</label>


          <input type="date" class="form-control" name="start_event" id="start_event">
          <br>

          <label>End Event:</label>

          <input type="date" class="form-control" 
          name="end_event" id="end_event">
          <br>

          <label>Palce Event</label>
          <?php
          $q="SELECT*FROM places";
          $result=mysqli_query($databaseconnect,$q);
          ?>  
          <div class="form-group">
           <select class="form-control" name="place_id" id="place_id">
            <option value="">---Select  Place---</option>
            <?php 
            while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
              echo "<option value='$row[0]'>$row[1]</option>";  
            }
            ?>
          </select>
          
        </div>



      </th>
    </table>

    <br>
    <label>Description:</label>
    <input type=text class="form-control" name="event_description" id="event_description" placeholder="Description Event">
    <br>

    <div class="alert alert-success">
      <strong>Warning! </strong>Should land to the correct location.
    </div>



    <form role="form">
      <h3>UpLoad Images</h3>
      <hr>
      <div class="form-group">
        <label>Images : 1</label>
        <input type="file" class="fileme" id="event_image1" name="event_image1">
      </div>
      <div class="form-group">
        <label>Images : 2</label>
        <input type="file" class="fileme" id="event_image2" name="event_image2">
      </div>
      <div class="form-group">
        <label>Images : 3</label>
        <input type="file" class="fileme" id="event_image3" name="event_image3">
      </div>


      <br>
      <table>
       <input type="submit" name="submit" class="btn btn-default" value=" Save " >
     </form>
     &nbsp;
     <form action="My_BRU.php">
       <input type="submit"  class="btn btn-default" value="Home ">
     </form>

     &nbsp;
     <form action="ManageEvents.php">
      <input type="submit" class="btn btn-default" value="ManageEvents">
    </form> 

    &nbsp;
    <form action="CeatePlace.php">
      <input type="submit" class="btn btn-default" value="CeatePlace">
    </form> 
  </table>   <br><br><br>
</div>
</form>




<script type="text/javascript">
      // nultiple initialize
      $('.fileme').filestyle({
        btnClass : 'btn-primary'
      });

    </script>





  </body>
  </html>



