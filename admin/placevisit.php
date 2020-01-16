<?php
include 'include/header.php';
include 'include/navbar.php';



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
		<form action="insert.php" method="POST">
		<div class="col-md-3"></div>
		<div class="col-md-6" style="background: lightyellow;">
			<label>IMAGE</label>
			<input type="text" name="image" class="form-control">
			<label>HEADING</label>
			<input type="text" name="heading" class="form-control">
			<label>DESCRIPTION</label>
			<textarea rows="8" name="description" class="form-control"></textarea>
			<button type="submit" style="margin-top: 6px;float: left;" class="btn btn-success">INSERT </button>
			</form>
			<a href="placevisittable.php"><input type="submit" value="VIEW TABLE" class="btn btn-enq" id="btn-send" name="submit" style="color: grey; margin-top: 6px; float: right;"></a>
		</div>
	
		</div>
	</div>
</body>
</html>
