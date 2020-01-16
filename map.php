<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body >
	<div class="row">
	<?php
		include 'includes/navbar.php';
	?>
</div>
	<div class="container">
		<div class="col-md-2"></div>
			<div class="col-md-8" >
				<div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="800" id="gmap_canvas" src="https://maps.google.com/maps?q=himachal%20pradesh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.maps-erstellen.de">maps-erstellen.de</a></div><style>.mapouter{position:relative;text-align:right;height:800px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:800px;margin-top: 10px; border: 2px solid #078ECA;}</style></div>
			</div>
		
		</div>
		<div class="row">
	<?php
		include 'includes/footer.php';
	?>
</div>
</body>
</html>