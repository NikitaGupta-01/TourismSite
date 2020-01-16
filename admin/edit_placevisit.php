<?php

	include 'include/header.php';

	include 'connection.php';

	$uniqueID = $_POST['uniqueID'];

	$placeQuery = "SELECT * FROM place WHERE id = '$uniqueID'";

	$placeResult = mysqli_query($conn, $placeQuery);

	$placeRow = mysqli_fetch_array($placeResult);

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
	<div class="container" >
		<form action="update_place.php" method="POST">

		<input type="hidden" name="uniqueID" value="<?php echo $uniqueID; ?>">

		<div class="col-md-3"></div>
		<div class="col-md-6" style="background: lightyellow;">
			
			<label>HEADING</label>
			<input type="text" name="heading" value="<?php echo $placeRow['heading']; ?>" class="form-control">
			<label>DESCRIPTION</label>
			<textarea rows="8" name="description"  value="<?php echo $placeRow['description']; ?>" class="form-control"> <?php echo $placeRow['description']; ?></textarea>
			<button type="submit" style="margin-top: 6px;float: left;" class="btn btn-success">UPDATE </button>

		</div>
	
		</div>
	</div>
</body>
</html>
