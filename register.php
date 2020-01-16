
<!DOCTYPE html>
<html> 
<head>
	<?php
	include 'includes/header.php';
		include 'includes/navbar.php';
	?>
	
	<style type="text/css"> 
		.col-md-12,.col-md-6{
			margin-bottom: 10px;
		}
		#aa{
			border: 2px solid grey;
			background-color: white;
		}
		body{
			background-image: linear-gradient(black,blue);
			background-repeat: no-repeat; 
			background-color: blue;
		}
		
	</style>
</head>
<body>

<div class="container-fluid">
	
	<form action="signup.php" method="POST" onsubmit="return validateFormpop()" style="margin-top: 100px; margin-bottom: 100px;">
	<div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<div class="row" id="aa">
					<div class="" style="color: black; font-size: 300%; " align="center"><b style="color: black;">SIGN UP</b></div>
				<div class="col-md-12" style="margin-top: 10px;">
						<label><b> FIRST NAME</b></label>
						<input type="text" name="fname" placeholder="ENTER YOUR FIRST NAME" class="form-control" required>
				</div>
				<div class="col-md-12" style="margin-top: 10px;">
						<label><b> 	LAST NAME</b></label>
						<input type="text" name="lname" placeholder="ENTER YOUR LAST NAME" class="form-control" required>
				</div>
				<div class="col-md-12" style="margin-top: 10px;">
					<label><b>GENDER</b></label><br>
					<input type="radio" name="gender" value="male">MALE<br>
					<input type="radio" name="gender" value="female">FEMALE<br>
					<input type="radio" name="gender" value="other">OTHERS<br>
				</div>
				<div class="col-md-12" style="margin-top: 10px;">
						<label><b>EMAIL</b></label>
						<input type="email" name="email" placeholder="ENTER YOUR EMAIL (abc@gmail.com)" class="form-control" required>
				</div>
				<div class="col-md-12" style="margin-top: 10px;">
						<label><b>PASSWORD</b></label>
						<input type="password" name="password" placeholder="ENTER PASSWORD" class="form-control" required>
				</div>
				<div class="col-md-6" style="margin-top: 10px;">
					<label><b>MOBILE NUMBER</b></label>
					<input type="number" name="mobile" placeholder="ENTER VALID NUMBER" class="form-control" required>
				</div>
				<div class="col-md-6" style="margin-top: 10px;">
						<label><b>AGE</b></label>
						<input type="text" name="age" placeholder="ENTER YOUR AGE" class="form-control" required>
				</div>
				
				<div class="col-md-12" align="center" style="margin-top: 10px;">
					<button type="submit" class="btn btn-success" style="width: 100%; height: 50%; margin-top: 20px;">SUBMIT</button>
				</div>
			</div>
		</div>
		<div class="col-md-3" >&nbsp;</div>
	</div>
</form>
</div>
</body>
</html>
<?php
		include 'includes/footer.php';
	?>