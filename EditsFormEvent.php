<?php 
require 'ConnectDataBase.php';
$event_id=$_GET['event_id'];
$qevent="SELECT*FROM  events WHERE event_id='$event_id'";
$resevent=mysqli_query($databaseconnect,$qevent);
$rowevent=mysqli_fetch_array($resevent,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Edit Event</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>




  <title>Edit Event</title>
</head>
<body>


  <br>



  <form action="UpdateEvent.php" enctype="multipart/form-data" method="post">
    <!--up load-->
    <div class="container">
      <h2>Edit Event</h2>
      <br> 


      <table>
        <br>

        <th> <label>Name Event:</label>

          <input type=text class="form-control" name="event_name" id="event_name" maxlength="50" placeholder="Name Event" value="<?php echo $rowevent['event_name'];?>">

          <br>


          <label>Start Event:</label>


          <input type="date" class="form-control" name="start_event" id="start_event" value="<?php echo $rowevent['start_event'];?>">
          <br>

          <label>End Event:</label>

          <input type="date" class="form-control" 
          name="end_event" id="end_event" value="<?php echo $rowevent['end_event'];?>">
          <br>

          <label>Palce Event</label>
          <?php
          $q="SELECT*FROM places";
          $result=mysqli_query($databaseconnect,$q);
          ?>  
          <select name="place_id" id="place_id" class="form-control">

            <?php 
            while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
              if ($row[0]==$rowevent['place_id']) {
                if ($row[0]==$rowevent['place_id']) {
                  echo "<option value='$row[0]' selected>$row[1]</option>";
                }else{
                  echo "<option value='$row[0]'>$row[1]</option>";
                }
              }
              else{
              }
              echo "<option value='$row[0]'>$row[1]</option>";  
            }
            ?>




          </select>
          <?php
          ?>









        </th>
      </table>

      <br>
      <label>Description:</label>
      <input type=text class="form-control" name="event_description" id="event_description" placeholder="Description Event">
      <br>

      <div class="alert alert-success">
        <strong>Warning! </strong>Should land to the correct location.
      </div>




      <table>




        <label>Images : 1</label>
        <br>
        <div class="form-group">
          <img src="upload/events/<?php echo $rowevent['event_image1']; ?>" width="100" height="100"">
        </div>

        <div class="form-group">
         <label>Images : 2</label>
         <br>
         <img src="upload/events/<?php echo $rowevent['event_image2']; ?>" width="100" height="100"">
       </div>


       <div class="form-group">
         <label>Images : 3</label>
         <br>
         <img src="upload/events/<?php echo $rowevent['event_image3']; ?>" width="100" height="100"">
       </div>


       <br>

       <input type="hidden" name="event_id" value="<?php echo $rowevent['event_id'];?>">
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



