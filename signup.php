<?php

require"connection.php";

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$password= $_POST['password'];
$mobile= $_POST['mobile'];
$age= $_POST['age'];

$q="SELECT * from login where email='$email'";
$r=mysqli_query($conn,$q);

if(mysqli_num_rows($r)>0){
	echo "<script>
	window.alert('Email Already Exist');
	window.location.href='register.php';
	</script>";
}
else{
	$query= "INSERT INTO login(fname,lname,gender,email,password,mobile,age) VALUES ('$fname','$lname','$gender','$email','$password','$mobile','$age')";	

	$result=mysqli_query($conn,$query);

	if($result){
		echo "<script>
				window.alert('SUCCESFULLY INSERTED');
				window.location.href='login.php';
			  </script>";
	}
	else{
		echo "<script>
				window.alert('ERROR!');
				window.location.href='register.php';
			  </script>";
	}
}
?>