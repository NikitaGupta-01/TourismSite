<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body >
<div class="row">
	<?php
		include 'includes/navbar.php';
	?>
</div>

<style type="text/css">

	/*p{

		font-size: 50px!important;

	}*/
  @media(max-width: 480px){

    p{
    	font-size: 10px!important;
    }
  }
  .img{
  	position: relative;
  	text-align: center;
  	color: black;
  	}
  	.front{
  		position: absolute;
  		top: 50%;
  		left: 50%;
  		transform: translate(-50%, -50%);
  	}
  	.overlay{
		  position: absolute; 
		  bottom: 0; 
		  background: rgb(0, 0, 0);
		  background: rgba(0, 0, 0, 0.5); /* Black see-through */
		  color: #f1f1f1; 
		  width: 80%;
		  transition: .5s ease;
		  opacity:0;
		  color: white;
		  font-size: 20px;
		  padding: 20px;
		  text-align: center;
  	}
  	.img:hover .overlay {
  opacity: 1;
}
.round {
  border-radius: 10px;
}
</style>

<div >
  <section style="background-image:url('images/home.jpg'); background-size: 100% 100%; height: 450px;">
    <div class="container">
        <div class="row">
           <!--  <div class="col-md-8 something">
                <b>
                <font  color="black"><i><ul>
                  <li>  Only Trusted &amp; Verified Agents</li>
                  <li> Friendly Customer Support </li>
                  <li>  100% Money Safe Guarantee </li>
                  <li>  Secure &amp; Safe Online Transactions</li>
                </ul></i></font>
            	</b>
           </div> -->
          	<div class="col-md-4">
	            <div class="screen-reader-response"></div>
	            <form action="enquiry_insert.php" method="post" onsubmit="return validateFormpop()">
	                <div><font size="6">Get Free Quote</font></div>                    
	                <div class="form-group"> 
	                    <input type="text" name="name" class="form-control" placeholder="Name" required="">
	                </div>
	                <div class="form-group"> 
	                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
	                </div>
	                <div class="form-group">                            
	                    <input type="text" name="mobile" class="form-control" placeholder="Mobile No" required="">
	  				</div>
	                <div class="form-group">                             
	                 	<input type="text" name="city" class="form-control" placeholder="Your City" required="">
	                </div>
	                <div class="form-group">                             
	      	         	<select name="menu-177" class="form-control">
	                        <option value="#">Select Your Package</option>
	                        <option value="Manali Volvo Tour Packages">Manali Volvo Tour Packages</option>
	                        <option value="Honeymoon Tour Packages">Honeymoon Tour Packages</option>
	                        <option value="Family Shimla Manali Tour">Family Shimla Manali Tour</option>
	                        <option value="Manali Dharamshala Dalhousie">Manali Dharamshala Dalhousie</option>
	                        <option value="Himachal with Golden Temple">Himachal with Golden Temple</option>
	                        <option value="Full Himachal Tour Packages">Full Himachal Tour Packages</option>
	                    </select>
	                </div>
	                <div class="text-center">
	                    <a href="enquiry.php"><input type="submit" value="Send Enquiry" class="btn btn-enq" id="btn-send" name="submit" style="color: blue;"></a>
	                </div>
	            </form>
            </div>
        </div>
    </div>
</section>

<!-- MARQUEE STARTS -->

<section >
	<marquee style="margin-top:2px;"><b style="font-size: 150%;color: red;">Himachal Tour Packages.&nbsp;Lowest Price Guaranteed.&nbsp;Tourism Special packages startint @7999.&nbsp;Only Trusted &amp; Verified Agents.&nbsp;Friendly Customer Support.&nbsp;100% Money Safe Guarantee.&nbsp;Secure &amp; Safe Online Transactions.</b></marquee>
</section>

<!-- MARQUEE ENDS -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<i><p style="font-size: 40px;color: white;text-align: center;margin-top: 5%;background-image: linear-gradient(lightgrey,dimgrey,black);">The land Of Gods</p></i>
		</div>
		<div class="col-md-4 img">
			 <a href="#"><section style="background-image:url('images/himalayas.jpg'); background-size: 100% 100%; height: 375px;margin-top: 10%;">
			 	<p class="front overlay" style="font-size: 40px;">Himalayas</p>
			 	<p style="font-size:15px; padding-top:98%;">View More</p>
			 </section></a>
		</div>
		<div class="col-md-4 img">
			 <a href="#"><section style="background-image:url('images/culture.jpg'); background-size: 100% 100%; height: 375px;margin-top: 10%;">
			 	<p class="front overlay" style="font-size: 40px;">Culture & Heritage</p>
			 	<p style="font-size:15px; padding-top:98%;">View More</p>
			 </section></a>
		</div>
		<div class="col-md-4 img">
			 <a href="#"><section style="background-image:url('images/flora.jpg'); background-size: 100% 100%; height: 375px;margin-top: 10%;">
			 	<p class="front overlay" style="font-size: 40px;">Flora & Fauna</p>
			 	<p style="font-size:15px; padding-top:98%;">View More</p>
			 </section></a>
		</div>
		<div class="col-md-4 img">
			 <a href="#"><section style="background-image:url('images/fest.jpg'); background-size: 100% 100%; height: 375px;margin-top: 10%;">
			 	<p class="front overlay" style="font-size: 40px;">Fairs & Fests</p>
			 	<p style="font-size:15px; padding-top:98%;">View More</p>
			 </section></a>
		</div>
		<div class="col-md-4 img">
			 <a href="#"><section style="background-image:url('images/cuisine.jpg'); background-size: 100% 100%; height: 375px;margin-top: 10%;">
			 	<p class="front overlay" style="font-size: 40px;">Cuisine</p>
			 	<p style="font-size:15px; padding-top:98%;">View More</p>
			 </section></a>
		</div>
		<div class="col-md-4 img">
			 <a href="#"><section style="background-image:url('images/adventure.jpg'); background-size: 100% 100%; height: 375px;margin-top: 10%;">
			 	<p class="front overlay" style="font-size: 40px;">Adventure</p>
			 	<p style="font-size:15px; padding-top:98%;">View More</p>
			 </section></a>
		</div>
	</div>
</div>



<div class="container-fluid" style="background-color: #150b56;margin-top: 50px;height: 450px;">
	<div class="row">
		<div class="col-md-6">
			<i><p style="font-size: 50px;text-align: center;color: white;"><u style="font-weight: 800;">The Beautiful State</u></p></i><br>

			<p style="font-size: 23px;color: white;">Till 19th century, Tourism in Himachal Pradesh was restricted only to a limited movement of pilgrims to a few spiritual destinations in around the hills. Only when the British established their chain of hill stations did tourism receive recognition in the State. Tourism activity received a shot in the arm when British declared Shimla “The Summer Capital of India” in 1864. Post independence, more investment in the infrastructure sector led to opening up of Tourism in the State. However the biggest boost to tourism occurred in the mid 80s and 90s.
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<section style="background-image:url('images/beauty.jpg'); background-size: 100% 100%; height: 350px;margin-top: 50px;">
		</div>	
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<i><p style="font-size: 40px;color: white;text-align: center;margin-top: 5%;background-image: linear-gradient(lightgrey,dimgrey,black);">Top Destination</p></i>
		</div>
		<div class="col-md-12">
			<div class="col-md-7">
				<div class="col-md-6 round">
					<a href="#">
						<img class="round" src="images/shimla.jpg" alt="Avatar" style="width:150px;float:left;">&nbsp;
						<p style="font-size: 12px;color: white;padding-left: 60%;"><b style="font-size: 20px">Shimla</b><br>Read more</p>
					</a>
				</div>
				<div class="col-md-6 round">
					<a href="#">
						<img class="round" src="images/manali.jpg" alt="Avatar" style="width:150px;float:left;">&nbsp;
						<p style="font-size: 12px;color: white;padding-left: 60%;"><b style="font-size: 20px">Manali</b><br>Read more</p>
					</a>
				</div>
				<div class="col-md-6 round" style="margin-top: 8%;">
					<a href="#">
						<img class="round" src="images/DHARAMSALA.jpg" alt="Avatar" style="width:150px;float:left;">&nbsp;
						<p style="font-size: 12px;color: white;padding-left: 60%;"><b style="font-size: 20px">Dharamshala</b><br>Read more</p>
					</a>
				</div>
				<div class="col-md-6 round" style="margin-top: 8%;">
					<a href="#">
						<img class="round" src="images/SPITI.jpg" alt="Avatar" style="width:150px;float:left;">&nbsp;
						<p style="font-size: 12px;color: white;padding-left: 60%;"><b style="font-size: 20px">Chamba</b><br>Read more</p>
					</a>
				</div>
			</div> 
			<div class="col-md-5">
				<p style="font-size: 15px;color: white;">While traditionally Himachal was known as a summer destination, the Department of Tourism & Civil Aviation has taken special efforts to break the seasonality factor and has developed diversified tourism products to attract tourists in other seasons too. Now Himachal is known as “A Destination for All Seasons and All Reasons”. In fact, the Department has laid a special emphasis on the development of activity-based tourism and opening up of new sub destinations. To promote tourism in the countryside and to unexplored areas, appropriate infrastructure is being developed within available resources.
				</p>
			</div> 
		</div>
	</div>
</div>
</body>
</html>
<?php
		include 'includes/footer.php';
	?>


