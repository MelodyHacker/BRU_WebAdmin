
<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM phones ";
$result=mysqli_query($databaseconnect,$q)
?>





<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Manage Phones</title>
</head>
<body>
	<div class="container">
		<br>
		<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
			&nbsp;
			<form action="CeatePhone.php">
				<input type="submit" class="btn btn-default" value="Ceate Phones">
			</form> 
			
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>ID</th>
				<th>Name Phone</th>
				<th>Number Phone</th>
				<th>Delete Phone</th>
				<th>Delete</th>
			</tr>
			<tr>

				<?php
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $row['phone_id']; ?> </td>
						<td><?php echo $row['phone_name']; ?> </td>
						<td><?php echo $row['phone_number']; ?> </td>
						<td><img src="upload/phones/<?php echo $row['image_phone']; ?>" width="50" height="50"></td>
						<td><a href="DeletePhone.php?phone_id=<?php echo $row['phone_id']; ?>">Delete</a></td>
						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>