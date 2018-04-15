
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style_map.css">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
  <title>Ceate Poriline Off</title>
</head>
<body>


 <div id="map_canvas"  style="   
 height: 80%;
 width: 100%;
 ">
</div>
<br>


<br>


<form action="PorilineInsert.php"  method="post">
  <div class="container">

    <h2>Lat-Long Location</h2>
    <br>


    <div class="alert alert-danger">
      <strong>Lat-Long Location </strong> Please check the information before save. !
    </div>

    <th>
      <label>Name Poriline:</label>


      <input type=text class="form-control" name="poriline_name" maxlength="50" placeholder="Name Poriline">

      <br>


      <label>Latitude:</label>
      <input type="text" class="form-control" id="lat" placeholder="Latitude" name="lat">

      <br>

      <label>Longitude:</label>
      <input type="text" class="form-control" id="lng" placeholder="Longitude" name="lng">   
      <br>
      <table>
      </th>
      <input type="submit" name="submit" class="btn btn-default" id="submit" value=" Save ">
    </form>

    &nbsp;
    <form action="My_BRU.php">
     <input type="submit"  class="btn btn-default" value="Home ">
   </form>

   &nbsp;
   <form action="ManagePorilines.php">
    <input type="submit" class="btn btn-default" value="Manage Poriline">
  </form> 

  <br><br>  <br><br>
</table>

</div>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG_XRJVSPps9W_wrEBh0dJCxFFCHQz_Gk&callback=initMap">
</script>
<script src="js/js_map.js"></script>


</script> 

</body>
</html>



