<?php
	$host='localhost';
	$user='root';
	$password='12345';
	$dbname='travel';

	$conn= mysqli_connect($host,$user,$password,$dbname);
	if(!$conn){

		echo"Connection to databese Failed";
	}
?>