<div class="row">
  <?php
    include 'includes/navbar.php';
  ?>
</div>
<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0,4,0,0.2);
  transition: 0.3s;
  height: 350px!important;
  /*width: 40%;*/
  margin-bottom: 20px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.aaa {
  /*padding: 2px 16px;*/
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-7">
      <div class="row">
        <p style="font-size: 20px; margin-left: 150px; color: white;"><strong><b>PLACES TO VISIT IN HIMACHAL PRADESH</b></strong></p>
      </div>
      <div class="row" style="margin-top: 5px;">
        
        <?php

          include 'connection.php';

          $query = "SELECT * FROM place";
          $result = mysqli_query($conn, $query);

          if($result){

            while($row = mysqli_fetch_array($result)){

              echo "<div class='col-md-6'>
                        
                      <div class='card'>

                        <a href='#'>
                          <img src='".$row['image']."' width='100%' height='200px' style='margin-top: 2px;'>
                        <div class='aaa'>
                          <h4 style='color: white;'><b>".$row['heading']."</b></h4>
                          <p style='color: white;'>".$row['description']."</p>
                        </div>
                        </a>

                      </div>
                    </div>";

            }

          }

        ?>


      </div>
    </div>


  <div class="col-md-4 " style="margin-top: 20px;">
    <div class="container-fluid">
      <div class="row">
                <p style="font-size: 18px; margin-left: 20px; color: white;"><strong><b>PLACES NEAR BY</b></strong></p>
              <a href="#">
                <div class="col-md-6">
                  <img src="images/punjab.jpg" alt="punjab" width="100%" height="150px" style="margin-top: 2px;">
                  <h5 style="color: white;"><b>PUNJAB</b></h5>
                </div>
              </a>
              <a href="#">
                <div class="col-md-6">
                  <img src="images/uttrakhand.jpg" alt="uttrakhand" width="100%" height="150px" style="margin-top: 2px;">
                  <h5 style="color: white;"><b>UTTRAKHAND</b></h5>
                </div>
              </a>
              <a href="#">
                <div class="col-md-6">
                  <img src="images/haryana.jpg" alt="haryana" width="100%" height="150px" style="margin-top: 2px;">
                  <h5 style="color: white;"><b>HARYANA</b></h5>
                </div>
              </a>
              <a href="#">
                <div class="col-md-6">
                  <img src="images/jandk.jpg" alt="jandk" width="100%" height="150px" style="margin-top: 2px;">
                  <h5 style="color: white;"><b>JAMMU & KASHMIR</b></h5>
                </div>
              </a>
              <a href="#">
                <div class="col-md-6">
                  <img src="images/up.jpg" alt="up" width="100%" height="150px" style="margin-top: 2px;">
                  <h5 style="color: white;"><b>UTTAR PRADESH</b></h5>
                </div>
              </a>
              <a href="#">
                <div class="col-md-6">
                  <img src="images/rajasthan.jpg" alt="rajasthan" width="100%" height="150px" style="margin-top: 2px;">
                  <h5 style="color: white;"><b>RAJASTHAN</b></h5>
                </div>
              </a>
              <div class="col-md-12" style="border: 1px solid grey; margin-top: 10px;">
                <div><font size="6" color="white">Get Free Quote</font></div>                    
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
    </div>
  </div>
</div>

<div class="row">
  <?php
    include 'includes/footer.php';
  ?>
</div>
</body>
</html> 
