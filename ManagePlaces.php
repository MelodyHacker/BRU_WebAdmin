
<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM places ";
$result=mysqli_query($databaseconnect,$q)

?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Edit Place</title>
</head>
<body>
	<div class="container">
		<br>
		<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
			&nbsp;
			<form action="CeatePlace.php">
				<input type="submit" class="btn btn-default" value="CeatePlace">
			</form> 
			&nbsp;
			<form action="ManageEvents.php">
				<input type="submit"  class="btn btn-default" value="ManageEvents">
			</form>
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>ID</th>
				<th>Name Place</th>
				<th>Lat</th>
				<th>Long</th>
				<th>Edit Place</th>
				<th>Delete</th>
			</tr>
			<tr>
				<th scope="row"></th>
				<?php
				while ($rowplace=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $rowplace['place_id']; ?> </td>
						<td><?php echo $rowplace['place_name']; ?> </td>
		
						<td><?php echo $rowplace['lat_location']; ?> </td>
						<td><?php echo $rowplace['long_location']; ?> </td>
						<td><a href="EditsFormPlace.php?place_id=<?php echo $rowplace['place_id']; ?>">Edit Place</a></td>
						<td><a href="DeletePlaces.php?place_id=<?php echo $rowplace['place_id']; ?>">Delete</a></td>




						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>