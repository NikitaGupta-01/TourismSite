<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<!-- <script type="text/javascript" src="sidebar.js"></script> -->
	<style type="text/css">
		body{
			background: white;
		}
*{
	 margin: 0px;
	 padding: 0px;
	 font-family: 'work sans',sans-serif; 
}
#sidebar{
	background-image: linear-gradient(blue,lightblue);
	position: fixed;
	width: 200px;
	height: 100%;
	/*background:#151719;*/
	left: -200px;
} 
#sidebar.active{
	left: 0px;
}
#sidebar ul li{
	color: rgba(230,230,230,0.9);
	list-style: none;
	padding: 15px 10px;
	border-bottom: 1px solid rgba(100,100,100,0.3);
}

#sidebar .toggle-btn{
	position: absolute;
	left: 230px;
	top: 20px;
}
#sidebar .toggle-btn span{
	display: block;
	width: 30px;
	height: 5px;
	background: white;
	margin:3px 0px;

}
.my{
	background: #222;}
b{
	color: black;
}
	</style>

</head>
<body class="my">
		<div id="sidebar">
			<div class="toggle-btn" onclick="toggleSidebar()">
				<span></span>
				<span></span>
				<span> </span>
			</div>
			<ul><b>
				<li><a href="heritage.php"><b>Heritage</b></a></li>
				<li><a href="tdh.php"><b>Things To Do In Himachal Pradesh</b></a></li>
				<li><a href="weather.php"><b>Weather</b></a></li>
				<li><a href="sen.php"><b>Send Enquiry Now</b></a></li>
				<li><a href="booking.php"><b>Bookings</b></a></li>
				<li><a href="contact.php"><b>Contact Us</b></a></li>
			</b></ul>
		</div>
		</body>
</html>
<script type="text/javascript">
	function toggleSidebar(){
		document.getElementById('sidebar').classList.toggle('active');
	}
</script>