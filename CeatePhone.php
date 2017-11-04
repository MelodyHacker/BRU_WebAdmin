
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <!-- Style  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <!-- Class btn up -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>


  <title>Ceate Report For User</title>
</head>
<body>



  <br>

  <br>

  <form action="PhoneInsert.php" enctype="multipart/form-data" method="post">
    <div class="container">
      <h3>Ceate Number Phones:</h3>
      <br>
      <input type=text class="form-control" name="phone_name" placeholder="Name Phone">
      <br>
      <input type=text class="form-control" name="phone_number" placeholder="Number Phone" maxlength="10"
      >
      <br>

      <form role="form">
        <h3>UpLoad Images</h3>
        <hr>
        <div class="form-group">
          <label>Images : 1</label>
          <input type="file" class="fileme" id="image_phone" name="image_phone">
        </div>
        <table>
          <input type="submit" name="submit" class="btn btn-default" id="submit" value=" Save ">
        </form>
        &nbsp;
        <form action="ManagePhones.php">
          <input type="submit" class="btn btn-default"  value="Manage Phones">
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



