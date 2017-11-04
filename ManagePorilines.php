
<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM poriline ";
$result=mysqli_query($databaseconnect,$q)

?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Manage Poriline</title>
</head>
<body>
	<div class="container">
		<br>
		<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
			&nbsp;
			<form action="CeatePoriline.php">
				<input type="submit" class="btn btn-default" value="Ceate Poriline">
			</form> 
			&nbsp;
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Lat</th>
				<th>Long</th>
				<th>Delete</th>
			</tr>
			<tr>
				<th scope="row"></th>
				<?php
				while ($rowplace=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $rowplace['poriline_id']; ?> </td>
						<td><?php echo $rowplace['poriline_name']; ?> </td>
		
						<td><?php echo $rowplace['poriline_lat']; ?> </td>
						<td><?php echo $rowplace['poriline_long']; ?> </td>
						<td><a href="DeletePoriline.php?poriline_id=<?php echo $rowplace['poriline_id']; ?>">Delete</a></td>




						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>