
<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM admins ";
$result=mysqli_query($databaseconnect,$q)
?>





<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Manage Admins</title>
</head>
<body>
	<div class="container">
		<br>
		<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
			&nbsp;
			<form action="CeateAdmin.php">
				<input type="submit" class="btn btn-default" value="CeateAdmin">
			</form> 
			&nbsp;
			
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>ID</th>
				<th>Name Admin</th>
				<th>User Name</th>
				<th>Pass Word</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<tr>

				<?php
				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $row['admin_id']; ?> </td>
						<td><?php echo $row['admin_name']; ?> </td>
						<td><?php echo $row['admin_input_id']; ?> </td>
						<td><?php echo $row['admin_input_pass']; ?> </td>
						<td><a href="EditsAdmin.php?admin_id=<?php echo $row['admin_id']; ?>">Edit Admin</a></td>
						<td><a href="DeleteAdmin.php?admin_id=<?php echo $row['admin_id']; ?>">Delete Admin</a></td>




						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>