<?php 
require 'ConnectDataBase.php';
$place_id=$_GET['place_id'];
$q="SELECT*FROM  places WHERE place_id='$place_id'";
$res=mysqli_query($databaseconnect,$q);
$rowplace=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Place</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
</head>
<body>


	<br>

	<!--up load-->

	<div class="container">
		<h2>Ceate Place</h2>
		<br> 
	</div>

	<form action="UpdatePlace.php" enctype="multipart/form-data" method="post">
		<div class="container">



			<label>Name Place:</label>

			<input type=text class="form-control" name="place_name" id="place_name" maxlength="50" placeholder="Name Place" value="<?php echo $rowplace['place_name'];?>">

			<br>

	
			<br>
			<label>Lat-Location:</label>
			<input type="text" class="form-control" name="lat_location" id="lat_location"  value="<?php echo $rowplace['lat_location'];?>">

			<br>
			<label>Long-Location:</label>
			<input type="text" class="form-control" name="long_location" id="long_location"  value="<?php echo $rowplace['long_location'];?>">



			<br>



			<br>
			<table>
				<input type="hidden" name="place_id" value="<?php echo $rowplace['place_id'];?>">
				<input type="submit" name="submit" class="btn btn-default" id="submit" value=" Save ">
			</form>

			&nbsp;
			<form action="My_BRU.php">
				<input type="submit"  class="btn btn-default" value="Home ">
			</form>

			&nbsp;
			<form action="ManagePlaces.php">
				<input type="submit" class="btn btn-default" value="ManagePlaces">
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



