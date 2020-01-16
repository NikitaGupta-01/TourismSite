<?php
include 'include/header.php';
// include 'include/navbar.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="a.css">
	<script type="text/javascript" src="b.js"></script>
	<script type="text/javascript" src="c.js"></script>
</head>
<body>
<table class="table table-bordered table-stripped table-hover">
	<tr>
		<th>ID</th>
		<th>IMAGE</th>
		<th>HEADING</th>
		<th>DESCRIPTION</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>


	<?php
	include("connection.php");

	$query="select * from place";
	$result=mysqli_query($conn,$query);
	$count=0;
	if($result){
		while($row= mysqli_fetch_array($result)){
			$count++;

			$id = $row['id'];

			echo "<tr>
					<td>".$count."</td>
					<td>".$row['image']."</td>
					<td>".$row['heading']."</td>
					<td>".$row['description']."</td>
					<td>
						<form method='POST' action='edit_placevisit.php'>
							<input type='hidden' name='uniqueID' value='$id'>
							<input type='submit' class='btn btn-primary' value='Edit' name='edit_visit'>
						</form>
					</td>
					<td>
						<form method='POST'>
							<input type='hidden' name='uniqueID' value='$id'>
							<input type='submit' class='btn btn-danger' value='Delete' name='delete_visit'>
						</form>
					</td>
				</tr>";
		}
	}

	// To delete the entry

	if(isset($_POST['delete_visit'])){

		$uniqueID = $_POST['uniqueID'];

		$deleteQuery = "DELETE FROM place WHERE id = '$uniqueID'";

		$deleteResult = mysqli_query($conn, $deleteQuery);

		if($deleteResult){

			echo "<script>
					window.alert('Entry deleted successfully');
					window.location.href='placevisittable.php';
				</script>";

		}


	}

	?>
</table>
</body>
</html>

