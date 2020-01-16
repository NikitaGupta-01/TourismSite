<?php

require"connection.php";

$image= $_POST['image'];
$heading= $_POST['heading'];
$description= $_POST['description'];

$query= "INSERT INTO place(image,heading,description) VALUES ('$image','$heading','$description')";	

$result=mysqli_query($conn,$query);

if($result){
	echo "<script>
			window.alert('SUCCESFULLY INSERTED');
			window.location.href='placevisittable.php';
		  </script>";
}
else{
	echo "<script>
			window.alert('ERROR!');
			window.location.href='placevisit.php';
		  </script>";
}
?>