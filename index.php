<html>
	<head>
		<!-- bootstrap css link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- font awesome cdn -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- link for css stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Kahi bhi ghum lo</title>
	</head>
	<body>
		<div class="fluid-container">
			
			<!-- row for upper header -->
			<div class="row bgpink text-white upper-header w-100">
				<div class="col-lg-2 p-2 col-4 text-center offset-lg-2">
					+91-7303969097
				</div>
				<div class="col-lg-3 p-2 text-center col-4">
					travelwithjatin@gmail.com
				</div>
				<div class="col-lg-3 p-2 text-center col-4">
					<a href="#"><img src="images/icons/fblogo.png" class="logo"></a>
					<a href="#"><img src="images/icons/instalogo.png" class="logo ml-4"></a>
					<a href="#"><img src="images/icons/twitterlogo.png" class="logo ml-4"></a>
				</div>
			</div>

			<!-- row for main header -->
			<div class="row navbar-row text-white w-100 main-header">
					<div class="col-lg-2 offset-lg-1 col-12 p-2 d-flex align-items-center justify-content-between">
						<a href="#" class="ml-3"><img src="images/icons/logo.png" class="site-logo"></a>
						<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#dropdownmenu" aria-controls="dropdownmenu" aria-expanded="false" aria-label="toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="col-lg-6 col-12 d-flex align-items-center justify-content-center">
						<nav class="navbar navbar-expand-lg">
							<div class="collapse navbar-collapse mx-auto" id="dropdownmenu">
								<ul class="navbar-nav mx-auto text-uppercase">
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">home</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">destination</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">team</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">testimonial</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">pay</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="col-lg-2 col-12 mb-1 d-flex align-items-center justify-content-center mx-2">
						<div class="input-group">
							<input type="text" class="form-control textfield" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
						    	<button class="btn" type="button"><i class="fa fa-search"></i></button>
						  	</div>
						</div>
						<a href="#"><img src="images/icons/honeymoonlogo.png" class="honeymoon-logo ml-4"></a>
					</div>
			</div>
			
			<!-- image slider -->
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img class="d-block w-100" src="images/sliderimg1.jpg" alt="First slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="images/sliderimg1.jpg" alt="Second slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="images/sliderimg1.jpg" alt="Third slide">
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
					<h1 class="about-heading">KBG Holidays Pvt. Ltd.</h1>
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
					<br>
					<button class="btn btnsubmit float-right" type="submit">Read More</button>
				</div>
				<div class="col-12 col-lg-6 mt-4">
				</div>
			</div>
			<hr class="divider">

			<!-- popular destinations section -->
			<div class="row bgblack p-5 text-center text-white d-flex justify-content-center">
				<br>
				<h1 class="about-heading">Popular Destinations</h1>
				
				<div id="carouselExample" class="carousel slide w-100" data-ride="carousel">
					<div class="carousel-inner">
	    				<div class="carousel-item active">
	      					<div class="row p-5">
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-2">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-2">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-2">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      					</div>
	    				</div>
	    				<div class="carousel-item">
	      					<div class="row p-5">
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-2">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-2">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
	      							</div>
	      						</div>
	      						<div class="col-4 destination mt-2">
	      							<img src="images/travel.jpg">
	      							<div class="overlay">
	      								<div class="text">Travel</div>
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
			</div>

			<hr class="divider">

			<!-- archit your code starts from here -->



		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>