<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">






  <title>Ceate News</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
</head>
<body>


  <br>

  <!--up load-->

  <div class="container">
    <h2>Ceate News</h2>
    <br> 
  </div>

  <form action="NewsInsert.php" enctype="multipart/form-data" method="post">
    <div class="container">

      <h3>UpLoad Images</h3>
      <div class="form-group">
        <label>Images : 1</label>
        <input type="file"  name="news_image1" id="news_image1" >
      </div>
      <div class="form-group">

       <label>Images : 2</label>
       <input type="file"  name="news_image2" id="news_image2" >
     </div>
     <div class="form-group">
       <label>Images : 3</label>
       <input type="file"  name="news_image3" id="news_image3" >
     </div>
     <br>
     <table>
       <input type="submit" name="submit" class="btn btn-default" id="submit" value=" Save ">
     </form>

     &nbsp;
     <form action="My_BRU.php">
       <input type="submit"  class="btn btn-default" value="Home ">
     </form>

     &nbsp;
     <form action="ManageNews.php">
      <input type="submit" class="btn btn-default" value="ManageNews">
    </form> 
  </table>
  <br><br>
</div>
<script type="text/javascript">
 $('input').filestyle({
  btnClass : 'btn-primary'
});
</script> 

</body>
</html>



