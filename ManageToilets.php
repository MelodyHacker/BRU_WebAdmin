
<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM toilets ";
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
			<form action="CeateToilet.php">
				<input type="submit" class="btn btn-default" value="CeateToilet">
			</form> 
			&nbsp;
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>ID</th>
				<th>Name Toilet</th>
				<th>Lat</th>
				<th>Long</th>
				<th>Delete</th>
			</tr>
			<tr>
				<th scope="row"></th>
				<?php
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $row['toilet_id']; ?> </td>
						<td><?php echo $row['toilet_name']; ?> </td>
						<td><?php echo $row['toilet_lat']; ?> </td>
						<td><?php echo $row['toilet_long']; ?> </td>
						<td><a href="DeleteToilet.php?toilet_id=<?php echo $row['toilet_id']; ?>">Delete</a></td>




						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>