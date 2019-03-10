<?php session_start();
error_reporting(0);
include('includes/config.php');
$id = $_GET['pkg_id'];

 ?>


<html>
	<head>
		<!-- bootstrap css link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- font awesome cdn -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- link for css stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<title>Kahin bhi ghoomlo</title>
		
	</head>
	<body>
		<div class="fluid-container">	
			<!-- row for upper header -->

			<?php 
                include('includes/header.php');
                $package=mysqli_query($con,"select * from travelpackages WHERE package_id = '".$id."'");
                $inclusions =mysqli_query($con,"select * from inclusion WHERE package_id = '".$id."'");
             $exclusions =mysqli_query($con,"select * from exclusion WHERE package_id = '".$id."'");
            $hotels =mysqli_query($con,"select * from hotels WHERE package_id = '".$id."'");
            
                $numrows = mysqli_num_rows($package);
                while($sub_row=mysqli_fetch_assoc($package)){
            ?>

<!--
		     <?php
            
            
            ?>
-->

			<!-- discount banner section --> 
			<div class="row header-detail w-100 text-white d-flex justify-content-center p-5">
                <br>
                
                <div class="col-7 w-100 p-2 mt-3">
                <h1 class="day_detail mt-5 w-100 text-white d-flex justify-content-center">Exotic Manali for 
                <?php echo htmlentities($sub_row['days']); ?> days <?php echo htmlentities($sub_row['nights']); ?> Nights<br>
                Places Covered : Shimla - Manali</h1>
                </div>
                
                <div class="col-3 w-100 p-2 mt-3">
                <h1 class="about-heading mt-5 w-100 text-white d-flex justify-content-center ml-3">starting<br>@ <?php echo htmlentities($sub_row['price']); ?></h1>
                </div>
                
            </div>  
               
            <?php }?> 
                
                
                
            <div class="row w-100 text-white d-flex justify-content-center"> 
                <div class="col-12 w-100 p-0 parallax">
<!--                    <img src="images/sliderimg2.jpg" alt="Discount" class="w-100">-->
                </div>
            </div>
          
    
            
                    
         <div class="row w-100 text-white d-flex justify-content-center MT-5 mb-5"> 
                <div class="col-8 w-100 p-0 d-flex justify-content-center">
                   
                  
                     <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                      <li class="nav-item mr-5">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-itinerary" role="tab" aria-controls="pills-home" aria-selected="true">ITINERARY</a>
                      </li>
                      <li class="nav-item mr-5">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-inclusion" role="tab" aria-controls="pills-profile" aria-selected="false">INCLUSIONS</a>
                      </li>
                      <li class="nav-item mr-5">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-exclusion" role="tab" aria-controls="pills-contact" aria-selected="false">EXCLUSIONS</a>
                      </li>
                       <li class="nav-item mr-5">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-hotel" role="tab" aria-controls="pills-contact" aria-selected="false">HOTELS</a>
                      </li>
                    </ul>


                </div>
                
                <div class="col-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-12"><button class="btn it-btn btnsubmit  float-right justify-content-center mr-5 pl-4 pr-4" type="submit">Customize</button></div>
                    <div class="col-12"><button class="btn it-btn btnsubmit float-right justify-content-center pl-4 pr-4 mt-3 mr-5" type="submit">Book Now</button></div>
                </div>
                </div>
            </div>



<div class="tab-content ml-5" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-itinerary" role="tabpanel" aria-labelledby="pills-home-tab">
  <div class="row ml-5">
          
           
           <?php 
            
             $package_detail=mysqli_query($con,"select * from itinerary WHERE package_id = '".$id."'");
            
                $numrows = mysqli_num_rows($package_detail);
                $day = 1;
                while($it=mysqli_fetch_assoc($package_detail)){
            
            ?>
  
      <div class="day_number col-9">
          <h4>Day-<?php echo $day." ".htmlentities($it['itinerary_title']); ?></h4>
      </div>
      <div class="col-9 day_detail">
          <p><?php echo htmlentities($it['itinerary_description']); ?></p>
      </div>
    <?php $day++; }?>
  
  
  </div>
  
  

  
  
  
  </div>
  
  <?php 
    
    while($inc=mysqli_fetch_assoc($inclusions)){
            
            ?>
  <div class="tab-pane fade ml-3" id="pills-inclusion" role="tabpanel" aria-labelledby="pills-profile-tab"><?php echo $inc['inclusion']; ?></div> <?php }?>
  
   <?php 
    
    while($exc=mysqli_fetch_assoc($exclusions)){
            
            ?>
  <div class="tab-pane fade ml-3" id="pills-exclusion" role="tabpanel" aria-labelledby="pills-contact-tab"><?php echo $exc['exclusion']; ?></div> <?php }?>
  
    <?php 
    while($hotel=mysqli_fetch_assoc($hotels)){
            
            ?>
  <div class="tab-pane fade ml-3" id="pills-hotel" role="tabpanel" aria-labelledby="pills-contact2-tab">
  <p><span class="hotel-head">Hotel Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hotel-detail"><?php echo $hotel['hotel_name']; ?></span></p>
 <p><span class="hotel-head">Hotel Category : </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hotel-detail"><?php echo $hotel['hotel_category']; ?></span></p>
    <p><span class="hotel-head">Hotel Address &nbsp;&nbsp;: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hotel-detail"><?php echo $hotel['hotel_place']; ?></span></p>
  
  
  </div>
  
  <?php } ?>
</div>

            <!-- google reviews section -->
    	<hr class="divider mt-5">

            <!-- footer section -->
            
            <?php 
                include('includes/footer.php');

            ?>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		
	</body>
</html>