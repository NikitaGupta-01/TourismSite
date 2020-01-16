<?php

require"connection.php";

$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$city= $_POST['city'];
$package= $_POST['package'];


  $query= "INSERT INTO enquiry(name,email,city,mobile,package) VALUES ('$name','$email','$city','$mobile','$package')"; 

  $result=mysqli_query($conn,$query);

  if($result){
    echo "<script>
        window.location.href='enquiry.php';
        </script>";
  }
  else{
    echo "<script>
        window.alert('ERROR!');
        window.location.href='home.php';
        </script>";
  }

?>