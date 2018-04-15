
<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM news ";
$result=mysqli_query($databaseconnect,$q)

?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Manage News</title>
</head>
<body>
	<div class="container">
		<br>
<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
			&nbsp;
			<form action="CeateNews.php">
				<input type="submit" class="btn btn-default" value="CeateNews">
			</form> 
		</table>



		<br>
		<table class="table table-striped">
			

			<tr>
				<th>Image1</th>
				<th>Image2</th>
				<th>Image3</th>
				<th>Delete</th>
			</tr>
			<tr>
				
				<?php
				while ($rownews=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><img src="upload/news/<?php echo $rownews['news_image1']; ?>" width="50" height="50"></td>
						<td><img src="upload/news/<?php echo $rownews['news_image2']; ?>" width="50" height="50"></td>
						<td><img src="upload/news/<?php echo $rownews['news_image3']; ?>" width="50" height="50"></td>
						<td><a href="DeleteNews.php?news_id=<?php echo $rownews['news_id']; ?>">Delete</a></td>




						
					</tr>
					<?php
				}

				?>
			</tr>
		</table>
	</div>
</body>
</html>