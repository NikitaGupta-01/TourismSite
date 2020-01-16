<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php

	    include 'includes/header.php';
		include 'includes/navbar.php';
	?>
	<style>
		.a{
			margin-top: 100px;
			margin-bottom: 100px;
		}
		body{
			background-image: linear-gradient(black,blue);
			background-repeat: no-repeat;
			background-color: blue;
		}
	</style>
</head>
<body>
<div class="container-fluid a">
	<form action="signin.php" method="POST" onsubmit="return validateFormpop()">
		<div class="col-md-3"></div>
		<div class="col-md-6" style="border: 2px solid lightgrey; background: white;">
			<div class="heading" align="center"><b style="font-size: 300%;">LOGIN</b></div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 ">
					<input type="text" name="email" placeholder="ENTER EMAIL OR MOBILE NUMBER" style="width: 100%; height:50px; margin-top: 20px;" required>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<input type="password" name="password" placeholder="ENTER PASSWORD" style="width: 100%; height: 50px; margin-top: 10px;" required>
				</div>
			</div>
			<div class="row"> 
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-success" style="width: 100%; height: 50px; margin-top: 20px;">SUBMIT</button>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="margin-top: 20px;">
					<div style="float: left; font-size: 15px; "><a href="#"><b style="color: black;">FORGOT PASSWORD</b></a></div>
					<div style="float: right; font-size: 15px;">New to HT?<a href="register.php"><b style="color: black;">Sign Up</b></a></div>
			    </div>
			    <div class="col-md-3"></div> 
			</div>
		</div>
	</form>
</div>
</body>
</html>
<?php
		include 'includes/footer.php';
	?>