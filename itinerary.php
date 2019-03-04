<?php session_start();
error_reporting(0);
include('includes/config.php');

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

            ?>

			<!-- image slider -->
<!--
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  				<div class="carousel-inner">
    				<div class="carousel-item active parallax">
    				</div>
    				<div class="carousel-item parallax">
    				</div>
    				<div class="carousel-item parallax">
    				</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
-->

			<!-- about us section -->
<!--
			<div class="row bgblack text-white">
				<div class="col-12 col-lg-6 p-5 mt-4">
					<h2 class="about-heading">KBG Holidays Pvt. Ltd.</h2>
					<br>
					<p>
						The holiday packages at KBG Holidays Pvt Ltd are designed to meet the different travelling needs of our customers from across the globe. Our experienced team provides you unbiased guidance at each step-undedrstanding your need, planning, traveling, staying and eploring. To make these packages more valuable, we constantly monitor and enhance them to meet the ever-changing environment and facilities.
					</p>
					<p>
						Our goal is to save your time and money with quick, quality results and simple comparisons. Not only do we want to help you find the perfect trip- we want to make sure you are happy with the trip provided. We make sure that we customize your trip as per your requirements and catter to them at every step of your trip.
					</p>
					<p>
						In simple words, "Your dream it & we picturize it in reality". As we stand only one thing.
					</p>
					<button class="btn btnsubmit float-right" type="submit">Read More</button>
				</div>
				<div class="col-12 col-lg-6 mt-4 p-5">
					<div id="carouselIndicators" class="carousel slide" data-ride="carousel" style="height: 50%;">
						<div class="carousel-inner h-100">
						    <div class="carousel-item active h-100">
						      <img class="d-block w-100 h-100" src="images/about1.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item h-100">
						      <img class="d-block w-100 h-100" src="images/about2.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item h-100">
						      <img class="d-block w-100 h-100" src="images/about3.jpg" alt="Third slide">
						    </div>
						</div>
					</div>
					
					<div class="carousel-indicators mt-3">
						<div class="row">
							<div data-target="#carouselIndicators" data-slide-to="0" class="active col-4">
						    	<img src="images/about1.jpg">
							</div>
							    
							<div data-target="#carouselIndicators" data-slide-to="1" class="col-4">
							    <img src="images/about2.jpg">
							</div>
							    
							<div data-target="#carouselIndicators" data-slide-to="2" class="col-4">
							    <img src="images/about3.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
-->
			

			<!-- popular destinations section -->
<!--
			<div class="row bgblack text-white d-flex justify-content-center">
				<br>
				<h2 class="about-heading mt-5">Popular Destinations</h2>
-->
				
				
		

			<!-- discount banner section --> 
			<div class="row header-detail w-100 text-white d-flex justify-content-center p-4 ">
                <br>
                
                <div class="col-7 w-100 p-0 mt-5">
                <h1 class="day_detail mt-5 w-100 text-white d-flex justify-content-center">Exotic Manali for 5 days 6 Nights<br>
                Places Covered : Shimla - Manali</h1>
                </div>
                
                <div class="col-3 w-100 p-0 mt-5">
                <h1 class="about-heading mt-5 w-100 text-white d-flex justify-content-center ml-3">starting<br>@ 14,999</h1>
                </div>
                
            </div>   
                
                
                
            <div class="row w-100 text-white d-flex justify-content-center"> 
                <div class="col-12 w-100 p-0 ">
                    <img src="images/sliderimg2.jpg" alt="Discount" class="w-100">
                </div>
            </div>
          
    
            
                    
         <div class="row w-100 text-white d-flex justify-content-center"> 
                <div class="col-12 w-100 p-0 ">
                   
                  
 <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-itinerary" role="tab" aria-controls="pills-home" aria-selected="true">Itinerary</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-inclusion" role="tab" aria-controls="pills-profile" aria-selected="false">Inclusions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-exclusion" role="tab" aria-controls="pills-contact" aria-selected="false">Exclusions</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-hotel" role="tab" aria-controls="pills-contact" aria-selected="false">Hotels</a>
  </li>
</ul>


                </div>
            </div>



<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-itinerary" role="tabpanel" aria-labelledby="pills-home-tab">Home</div>
  <div class="tab-pane fade" id="pills-inclusion" role="tabpanel" aria-labelledby="pills-profile-tab">Inclusions</div>
  <div class="tab-pane fade" id="pills-exclusion" role="tabpanel" aria-labelledby="pills-contact-tab">Exclusions</div>
  <div class="tab-pane fade" id="pills-hotel" role="tabpanel" aria-labelledby="pills-contact2-tab">Hotels Package Type</div>
</div>

            <!-- google reviews section -->
    

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