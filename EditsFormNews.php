<?php 
require 'ConnectDataBase.php';
$news_id=$_GET['news_id'];
$q="SELECT*FROM  news WHERE news_id='$news_id'";
$res=mysqli_query($databaseconnect,$q);
$rownews=mysqli_fetch_array($res,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">






  <title>Edit News</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
</head>
<body>


  <br>

  <!--up load-->

  <div class="container">
    <h2>Edit News</h2>
    <br> 
  </div>

  <form action="UpdateNews.php" enctype="multipart/form-data" method="post">
    <fieldset>
      <div class="container">



        <label>NameNews:</label>

        <input type=text class="form-control" name="news_name" id="news_name" maxlength="50" value="<?php echo $rownews['news_name'];?>">

        <br>

        <label>Description:</label>

        <input type=text class="form-control" name="news_description" id="news_description" value="<?php echo $rownews['news_description'];?>">

        <br>
        <label>Start News:</label>


        <input type="date" class="form-control" name="start_news" id="start_news" value="<?php echo $rownews['start_news'];?>">

        <br>


        <label>End News:</label>

        <input type="date" class="form-control" 
        name="end_news" id="end_news" value="<?php echo $rownews['end_news'];?>">



        <br>


        <label>Images : 1</label>
        <br>
        <div class="form-group">
          <img src="upload/news/<?php echo $rownews['news_image1']; ?>" width="100" height="100"">
        </div>

        <div class="form-group">
         <label>Images : 2</label>
         <br>
         <img src="upload/news/<?php echo $rownews['news_image2']; ?>" width="100" height="100"">
       </div>


       <div class="form-group">
         <label>Images : 3</label>
         <br>
         <img src="upload/news/<?php echo $rownews['news_image3']; ?>" width="100" height="100"">
       </div>


       <br>
       <table>
        <input type="hidden" name="news_id" value="<?php echo $rownews['news_id'];?>">
        <input type="submit" name="submit" class="btn btn-default" id="submit" value=" Save ">
      </fieldset>
    </form>





    &nbsp;
    <form action="My_BRU.php">
     <input type="submit"  class="btn btn-default" value="Home ">
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



