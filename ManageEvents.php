<?php
header("Refresh:3");
require 'ConnectDataBase.php';
$q="SELECT*FROM events INNER JOIN places ON events.place_id_event=places.place_id";
$result=mysqli_query($databaseconnect,$q)
?>





<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<title>Manage Events</title>
</head>
<body>
	<div class="container">
		<br>
		<table>
			<form action="My_BRU.php">
				<input type="submit" class="btn btn-default" value="Home">
			</form>
			&nbsp;
			<form action="CeateEvent.php">
				<input type="submit" class="btn btn-default" value="CeateEvent">
			</form>
			&nbsp;
			<form action="ManagePlaces.php">
				<input type="submit"  class="btn btn-default" value="ManagePlaces">
			</form>
		</table>
		<br>
		<table class="table table-striped">

			<tr>
				<th>ID</th>
				<th>Name Event</th>
				<th>Description</th>
				<th>Start Event</th>
				<th>End Event</th>
				<th>Place ID</th>
				<th>Place Event</th>
				<th>Image1</th>
				<th>Image2</th>
				<th>Image3</th>
				<th>Edit Event</th>
				<th>Hide Event</th>
			</tr>
			<tr>

				<?php
				while ($rowevent=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $rowevent['event_id']; ?> </td>
						<td><?php if ($rowevent['event_status']=='2') {echo "Hide";
						}else { echo $rowevent['event_name'];  } ?> </td>
						<td><?php echo $rowevent['event_description']; ?> </td>
						<td><?php echo $rowevent['start_event']; ?> </td>
						<td><?php echo $rowevent['end_event']; ?> </td>
						<td><?php echo $rowevent['place_id_event']; ?> </td>
						<td><?php echo $rowevent['place_name']; ?> </td>
						<td><img src="upload/events/<?php echo $rowevent['event_image1']; ?>" width="50" height="50"></td>
						<td><img src="upload/events/<?php echo $rowevent['event_image2']; ?>" width="50" height="50"></td>
						<td><img src="upload/events/<?php echo $rowevent['event_image3']; ?>" width="50" height="50"></td>
						<td><a href="EditsFormEvent.php?event_id=<?php echo $rowevent['event_id']; ?>">Edit Event</a></td>
						<td><a href="HideEvent.php?event_id=<?php echo $rowevent['event_id']; ?>">Hide Event</a></td>





					</tr>
					<?php
				}
				?>
			</tr>
		</table>
	</div>
</body>
</html>
