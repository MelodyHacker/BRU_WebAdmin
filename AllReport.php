<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM reports ";
$result=mysqli_query($databaseconnect,$q)

?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>All Report</title>
</head>
<body>
	<div class="container">
		<br>
		<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
	
			
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>ID Report</th>
				<th>Name Report</th>
				<th>Delete</th>
			</tr>
			<tr>
				
				<?php
				while ($rowreport=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $rowreport['report_id']; ?> </td>
						<td><?php echo $rowreport['report_name']; ?> </td>
						<td><a href="DeleteReport.php?report_id=<?php echo $rowreport['report_id']; ?>">Delete</a></td>




						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>