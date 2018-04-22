<?php
require 'ConnectDataBase.php';
$q="SELECT*FROM reports ";
$result=mysqli_query($databaseconnect,$q)
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <!--styl format-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/stylish-portfolio.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--link scview-->




  <!--call me icon-->

  <!--link scview-->


  <!--report-->







  <title>My BRU</title>
</head>

<body>

  <!-- Navigation -->
  <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
      <li class="sidebar-brand">
        <a href="#top" onclick=$( "#menu-close").click();>BRU</a>
      </li>
      <li>
        <a href="#top" onclick=$( "#menu-close").click();>Home</a>
      </li>
      <li>
        <a href="#admins" onclick=$( "#menu-close").click();>Admins</a>
      </li>
      <li>
        <a href="#ceate" onclick=$( "#menu-close").click();>Ceates</a>
      </li>
      <li>
        <a href="#reports" onclick=$( "#menu-close").click();>Reports</a>
      </li>
      <li>
        <a href="#about" onclick=$( "#menu-close").click();>About Me ?</a>
      </li>

    </ul>
  </nav>

  <!-- Header -->
  <header class="header" id="top">
    <div class="text-vertical-center">
     <!--  <h1>Administrator</h1>
      <h3>Please check the information before editing !</h3>
      <br> -->
    </div>
  </header>

  <br>
  <br>
  <br>

  <!--admin-->
  <section id="admins" class="font">

    <form action="CheckPassWord.php" method="post" >
      <div class="container">
        <h1>Administrator</h1>
        <h5>Confirm Password</h5>
        <div class="alert alert-danger">
          <strong>Warning! </strong> Please check the information before editing. !
        </div>
        <form> <div class="col-xs-5">
         <label>ID UserNmame:</label>
         <input type="text" class="form-control" name="id" id="id" placeholder="Enter UserNmame">
         <br>


         <label>Password:</label>
         <input type="password" class="form-control" id="pass" name="password" placeholder="Enter password">
         <span class="help-block">Admin will not be able to have admin alone in the system.</span>
         <form action="manageadmins.php">
          <input type="submit" class="btn btn-default" name="submit" value="Confirm !!!">
        </form>
      </div>

    </form>
  </div>
</form>



</section>


<!--latlong-->
<br>




<section id="ceate" class="ceate">
  <div class="container">
    <h2>Ceates</h2>
    <br>

    <table>

      <form action="CeateNews.php" >
        <input type="submit" class="btn btn-default"  value="Ceate News" >
      </form>
      &nbsp;
      <form action="CeatePlace.php">
        <input type="submit" class="btn btn-default"  value="Ceate Place">
      </form>
      &nbsp;
      <form action="CeateEvent.php">
        <input type="submit" class="btn btn-default" value="Ceate Event">
      </form>
      &nbsp;
       <form action="CeatePhone.php">
        <input type="submit" class="btn btn-default" value="Ceate Phone">
      </form>
      &nbsp;
      <form action="CeateToilet.php">
        <input type="submit" class="btn btn-default"  value="Ceate Toilet">
      </form>
      &nbsp;
      <form action="CeatePoriline.php">
        <input type="submit" class="btn btn-default"  value="Ceate Poriline">
      </form>
      <br>
      <br>
      &nbsp;
      <form action="ManageNews.php">
        <input type="submit" class="btn btn-default"  value="Manage News">
      </form>
      &nbsp;
      <form action="ManagePlaces.php">
        <input type="submit" class="btn btn-default" value="Manage Places">
      </form>
      &nbsp;
      <form action="ManageEvents.php">
        <input type="submit" class="btn btn-default" value="Manage Events">
      </form>
      &nbsp;
      <form action="ManagePhones.php">
        <input type="submit" class="btn btn-default" value="Manage Phones">
      </form>
      &nbsp;
      <form action="ManageToilets.php">
        <input type="submit" class="btn btn-default" value="Manage Toilets">
      </form>
      &nbsp;
      <form action="ManagePorilines.php">
        <input type="submit" class="btn btn-default" value="Manage Porilines">
      </form>
      &nbsp;

    </table>
  </div>




</section>





<br>

<!--map   AIzaSyD71AcndBbEdu5PrjsBFREzCMLZ-E2QGtk
-->


<br>











<!--reports-->
<section id="reports" class="reports">
  <div class="container">
    <h2>Reports</h2>
    <br><br>
    <?php
    $x=1;
    while ($rownews=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      if ($x==11) {
       break;
     }
     ?>
     <label>Report:</label>
     <?php echo $x?>
     <br>
     <label>ID Report</label>
     <?php
     echo $rownews['report_id'];
     ?><br>
     <label>Name Report</label>
     <?php
     echo $rownews['report_name'];
     ?>
     <br>
     <br>
     <?php
     $x++;
   }
   ?>
   <br>
   <form action="AllReport.php">
     <input type="submit" value="All Report" class="btn btn-default">
   </form>
   <br>
   <br>
   <table>
     <th><div id="carousel-example-generic"  class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/cl3.jpg" width="100%" height="100%">
        </div>
        <div class="item">
          <img src="img/cl4.jpg" width="100%" height="100%">
        </div>
        <div class="item">
          <img src="img/cl1.jpg" width="100%" height="100%">
        </div>
      </div>
    </div>
  </th>
  <th><div id="carousel-example-generic"  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/cl1.jpg" width="100%" height="100%">
      </div>
      <div class="item">
        <img src="img/cl5.jpg" width="100%" height="100%">
      </div>
      <div class="item">
        <img src="img/cl4.jpg" width="100%" height="100%">
      </div>
    </div>
  </div>
</th>
<th><div id="carousel-example-generic"  class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/cl5.jpg" width="100%" height="100%">
    </div>
    <div class="item">
      <img src="img/cl2.jpg" width="100%" height="100%">
    </div>
    <div class="item">
      <img src="img/cl3.jpg" width="100%" height="100%">
    </div>
  </div>
</div>
</th>


</table>

</div>
</section>


<section id="about" class="about">
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">


            <br><br><br>
            <h3>Ceate By </h3>
            <p>MelodyHacker.Cs1/57-026</p>
            <p>
            </div>
            <div class="footer-col col-md-4">
              <br><br><br>
              <h3>Call me</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.facebook.com/BackDeathAngel?ref=bookmarks">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://plus.google.com/u/0/106085263787719453121?tab=wX">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
              </ul>


            </div>
            <div class="footer-col col-md-4">
              <br><br><br>

              <h3>Thank for</h3>
              <br> <p>startbootstrap  Jonas Badalic  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <br><br><br>


            </p></div></div></div></div></footer></section>

          </body>



          <!--JQ-->
          <script src="js/jquery.js"></script>

          <!--Bootstrap menu sl-->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
          <script src="js/stylish-portfolio.js"></script>
          <!--SC view-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <!--show lat long-->
        </body>

        </html>
