<?php

	require 'connection.php';

	$heading = $_POST['heading'];
	$description = $_POST['description'];

	$uniqueID = $_POST['uniqueID'];


	$updateQuery = "UPDATE place SET heading = '$heading', description = '$description' WHERE id = '$uniqueID'";

	$updateResult = mysqli_query($conn, $updateQuery);

	if($updateResult){

		echo "<script>
				window.alert('Entry Updated successfully');
				window.location.href='placevisittable.php';
			</script>";

	}
	else{

		echo "<script>
				window.alert('Something Went Wrong!');
				window.location.href='placevisittable.php';
			</script>";

	}


?>