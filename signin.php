<?php

require"connection.php";

$email= $_POST['email'];
$mobile= $_POST['mobile'];
$password= $_POST['password'];


$query="SELECT * from login where email='$email'  and password='$password'";
	$result= mysqli_query($conn,$query);

	if(mysqli_num_rows($result)>0){
		
		
		echo "<script>
		window.alert('LOGIN SUCCESSFUL');
				window.location.href='profile.php';
			</script>";
	
	}
	else{
	
		echo "<script>
			window.alert('INVALID EMAIL OR PASSWORD!');
			window.location.href='login.php';
		  </script>";;

	}

?>