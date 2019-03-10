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
                $about_detail=mysqli_query($con,"select * from abouts");
            $team_detail=mysqli_query($con,"select * from teams");
                 while($about=mysqli_fetch_assoc($about_detail)){
          ?>

            <div class="row w-100 text-white d-flex justify-content-center about-row pt-5">
                
              
<!--               <div class="col-6 float-left mt-4"></div>-->
                <div class="col-6 about-div">
                
                 
                        <h3 class="about-heading">About Us</h3>
                        <div class="about-text "><p><?php echo $about['aboutcontent']; ?></p></div>
                       
                        
                  
                </div>
               
                 <div class="col-6 founder-div ">
                
                 
                        <h5 class="about-heading">Founder's Message</h5>
                        <img src="images/icons/inverted.png" alt="" class="founder-img">
                         
                        <h5 class="about-heading pt-5"><?php echo htmlentities($about['foundername']); ?></h5>
                        <div class="founder-des pt-1">
                            <p>Founder</p>
                        </div>
                        
                        <div class="founder-text pt-1"><p><?php echo $about['foundermsg']; ?></p></div>
                       
                        
                   <?php  }?>
                </div>
               
               
               
               
            
                
            </div>

        <hr class="divider mt-5">
        
        <div class="row bgblack text-white d-flex justify-content-center">
				<br>
				<h2 class="about-heading mt-5">Meet Our Team</h2>
				
				<div id="carouselExample" class="carousel slide w-100 mt-5" data-ride="carousel">
					<div class="carousel-inner">
                    
                       
                       
                        
                        
                    
	    				<div class="carousel-item active">
	      					<div class="row">
	      					
	      						<div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name">Gaganpreet Arora</p>
	      							
	      							<p class="d-flex justify-content-center person-designation">Travel Expert (Gujarat)</p></div>
	      					    </div>
                                
                                <div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name">Swati Singhal</p>
	      							
	      							<p class="d-flex justify-content-center person-designation">Travel Expert (Ladakh / Kerala / Karnataka / Kashmir)</p></div>
	      					    </div>
                                
                                <div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name">Muskan Bareja</p>
	      							
	      							<p class="d-flex justify-content-center person-designation">Travel Expert (Kerala / Karnataka)</p></div>
	      					    </div>
                                 
                                   						
	      					</div>
	    				</div>
                      
                      
                      <div class="carousel-item ">
	      					<div class="row">
	      					
	      						<div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name">Anshika Singla</p>
	      							
	      							<p class="d-flex justify-content-center person-designation">Marketing Head</p></div>
	      					    </div>
                                
                                <div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name">Monika Gupta</p>
	      							
	      							<p class="d-flex justify-content-center person-designation">Travel Expert (Himachal Pradesh / Uttarakhand)</p></div>
	      					    </div>
                                
<!--
                                <div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name">Gaganpreet Arora</p>
	      							
	      							<p class="d-flex justify-content-center person-designation">Travel Expert (Gujarat)</p></div>
	      					    </div>
-->
                                 
                                   						
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