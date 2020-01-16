<?php

	require 'connection.php';

	$email= $_POST['email'];
	$password=$_POST['password'];

	$query="SELECT * from adminlogin where email='$email'  and password='$password'";
	$result= mysqli_query($conn,$query);

	if(mysqli_num_rows($result)>0){
		
		$row = mysqli_fetch_array($result);

		session_start();

		$_SESSION['set'] = 'done';

		$_SESSION['id'] = $row['id'];
		echo "<script>
		window.location.href='index.php';
		</script>";
	}

	else{
	
		echo 'LOGIN FAILED';

	}


?>