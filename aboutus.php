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
	
        <?php 
                include('includes/header.php');
                

          ?>

            <div class="row w-100 text-white d-flex justify-content-center about-row pt-5">
                
              
<!--               <div class="col-6 float-left mt-4"></div>-->
                <div class="col-6 about-div">
                
                 
                        <h3 class="about-heading">About Us</h3>
                        <div class="about-text "><p>This is test data This is test data This is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test data</p></div>
                       
                        
                  
                </div>
               
                 <div class="col-6 founder-div ">
                
                 
                        <h5 class="about-heading">About Us</h5>
                        <img src="images/icons/inverted.png" alt="" class="founder-img">
                        <h5 class="about-heading pt-5">Jatin Arora</h5>
                        <div class="founder-des pt-1">
                            <p>Founder</p>
                        </div>
                        
                        <div class="founder-text pt-1"><p>This is test data This is test data This is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test dataThis is test data</p></div>
                       
                        
                  
                </div>
               
               
               
               
            
                
            </div>


        
        <div class="row bgblack text-white d-flex justify-content-center">
				<br>
				<h3 class="about-heading mt-5">Meet Our Team</h3>
				
				<div id="carouselExample" class="carousel slide w-100 mt-5" data-ride="carousel">
					<div class="carousel-inner">
	    				<div class="carousel-item active">
	      					<div class="row">
	      						<div class="col-lg-4 col-6 team-div">
<!--	      							<img src="images/travel.jpg">-->
	      							
<!--
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Kutch
	      										<br>
	      										<span class="subtext">Gujarat</span>
	      									</div>
	      								</div>
	      							</div>
-->
	      						</div>
	      						<div class="col-lg-4 col-6 destination">
	      							<img src="images/travel1.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Anjuna Beach
	      										<br>
<!--	      										<span class="subtext">Goa</span>-->
	      									</div>
	      								</div>
	      							</div>
	      						</div>
	      						<div class="col-lg-4 col-6 destination">
	      							<img src="images/travel3.jpg">
	      							<div class="overlay">
	      								<div class="w-100 h-100 pl-3 pt-1">
	      									<div class="text">
	      										Udaipur
	      										<br>
<!--	      										<span class="subtext">Rajasthan</span>-->
	      									</div>
	      								</div>
	      							</div>
	      						</div>
<!--
	      						<div class="col-lg-4 col-6 destination mt-1">
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
	      						<div class="col-lg-4 col-6 destination mt-1">
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
	      						<div class="col-lg-4 col-6 destination mt-1">
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
-->
	      					</div>
	    				</div>
	    				<div class="carousel-item">
	      					<div class="row">
	      						<div class="col-lg-4 col-6 destination">
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
	      						<div class="col-lg-4 col-6 destination">
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
	      						<div class="col-lg-4 col-6 destination">
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
	      						<div class="col-lg-4 col-6 destination mt-1">
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
	      						<div class="col-lg-4 col-6 destination mt-1">
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
	      						<div class="col-lg-4 col-6 destination mt-1">
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