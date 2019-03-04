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

			<!-- about us section -->
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
			<hr class="divider">

			<!-- popular destinations section -->
			<div class="row bgblack text-white d-flex justify-content-center">
				<br>
				<h2 class="about-heading mt-5">Popular Destinations</h2>
				
				<div id="carouselExample" class="carousel slide w-100 mt-5" data-ride="carousel">
					<div class="carousel-inner">
	    				<div class="carousel-item active">
	      					<div class="row">
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Kutch
	      										<br>
	      										<span class="subtext">Gujarat</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel1.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Anjuna Beach
	      										<br>
	      										<span class="subtext">Goa</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel3.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Udaipur
	      										<br>
	      										<span class="subtext">Rajasthan</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-1">
	      							<img src="images/travel4.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Manali
	      										<br>
	      										<span class="subtext">Himachal Pradesh</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-1">
	      							<img src="images/travel5.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Munnar
	      										<br>
	      										<span class="subtext">Kerala</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-1">
	      							<img src="images/travel6.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Rameswaram
	      										<br>
	      										<span class="subtext">Tamil Nadu</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      					</div>
	    				</div>
	    				<div class="carousel-item">
	      					<div class="row">
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Kutch
	      										<br>
	      										<span class="subtext">Gujarat</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel1.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Anjuna Beach
	      										<br>
	      										<span class="subtext">Goa</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel3.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Udaipur
	      										<br>
	      										<span class="subtext">Rajasthan</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-1">
	      							<img src="images/travel4.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Manali
	      										<br>
	      										<span class="subtext">Himachal Pradesh</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-1">
	      							<img src="images/travel5.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Munnar
	      										<br>
	      										<span class="subtext">Kerala</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-1">
	      							<img src="images/travel6.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Rameswaram
	      										<br>
	      										<span class="subtext">Tamil Nadu</span>
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      					</div>
	    				</div>
  					</div>
  					<div class="row d-flex mt-5 align-items-center justify-content-center">
  						<a href="#carouselExample" role="button" data-slide="prev">
	    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    					<span class="sr-only">Previous</span>
  						</a>
  						<a href="#carouselExample" role="button" data-slide="next" class="ml-3">
	    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    					<span class="sr-only">Next</span>
  						</a>
  					</div>
				</div>
			</div>
			<hr class="divider mt-5">

			<!-- discount banner section --> 
			<div class="row w-100 text-white d-flex justify-content-center">
                <br>
                <h2 class="about-heading mt-5">Special Offers</h2>
                <div class="col-12 w-100 p-0 mt-5">
                    <img src="images/discount.jpg" alt="Discount" class="w-100">
                </div>
            </div>
            <hr class="divider mt-5">

            <!-- google reviews section -->
            <div class="row bgblack p-5 text-center text-white d-flex justify-content-center mt-5">
				<br>
				<h2 class="about-heading">Google Review</h2>
				<div id="carouselExample" class="carousel slide w-100" data-ride="carousel">
					<div class="carousel-inner">
	    				<div class="carousel-item active">
	      					<div class="row p-5">
	      						<div class="col-5 destination">
	      							<img src="images/travel.jpg">
	      						</div>
	      						<div class="col-2 destination">
	      					    </div>
	      						<div class="col-5 destination">
	      							<img src="images/travel.jpg">
	      						</div>
	      					</div>
	    				</div>
	    				<div class="carousel-item">
	      					<div class="row p-5">
	      						<div class="col-5 destination">
	      							<img src="images/travel.jpg">
	      							
	      						</div>
	      						<div class="col-2 destination">

	      						</div>
	      						<div class="col-5 destination">
	      							<img src="images/travel.jpg">
	      							
	      						</div>

	      					</div>
	    				</div>
  					</div>
  				</div>
  				<div class="row d-flex align-items-center justify-content-center">
  						<a href="#carouselExample" role="button" data-slide="prev">
	    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    					<span class="sr-only">Previous</span>
  						</a>
  						<a href="#carouselExample" role="button" data-slide="next" class="ml-3">
	    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    					<span class="sr-only">Next</span>
  						</a>
  					</div>
			</div>
			<hr class="divider">

			<!-- contact us section -->
			<div class="row mt-5 text-center bg-black text-white d-flex justify-content-center">
                <br>
                <div class="col-12">
	                <h2 class = "about-heading">
	                    Contact Us
	                </h2>
            	</div>
                <br>   
                <div class="col-6 mt-5 pl-4">
                    <input class="form-control textfield w-50 element-center" type='text' name='name' placeholder="Name"  required>
                    <input class="form-control textfield w-50 element-center" type='text' name='name' placeholder="Email"  required>
                    <input class="form-control textfield w-50 element-center" type='text' name='name' placeholder="Contact No"  required>
                </div>
                <div class="col-6 mt-5">
                    <textarea class="form-control textfield element-center w-50" rows = "3" placeholder="Message" required="" name="message"></textarea>
                    <button class="btn btnsubmit contact-submit ml-3 mt-2" type="submit">SUBMIT</button>
                </div>
            </div>

            <!-- map section -->
            <div  class = "mt-5" style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=District%20Center%20Janakpuri%2CDelhi+(Kahi%20Bhi%20Ghoomlo)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe></div><br />

            <!-- footer section -->
            
            <?php 
                include('includes/footer.php');

            ?>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>