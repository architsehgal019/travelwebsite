<?php session_start();
error_reporting(0);
include('includes/config.php');
$id = $_GET['id'];
$name = $_GET['name'];
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

		
		
                
                
            <div class="row w-100 location-img text-white d-flex justify-content-center parallax_nopic"> 
                <div class="col-12 w-100 p-0 ">
                      <div class="centered w-100 text-white d-flex justify-content-center ">
                          <h1 class="h"><?php echo htmlentities($name); ?></h1>
                      </div>
                </div>
            </div>
            
          
<!--
          <div class="row mt-5">
           
           <div class="col-4">
            <div class="card" style="width: 100%;">
              <img class="card-img-top" src="images/travel5.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            
            </div>
            
            
             <div class="col-4">
            <div class="card" style="width: 100%;">
              <img class="card-img-top" src="images/travel5.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            
            </div>
            
            
            
            </div>
            
-->
           <div class="row  w-100 text-white d-flex justify-content-center mt-5 mb-5"> 
                
                          <h1 class="package-head">Packages</h1>
                      
            </div>
            
           
           
           <?php
            
            $package=mysqli_query($con,"select * from travelpackages WHERE destination_id = '".$id."'");
            
            $numrows = mysqli_num_rows($package);
            ?>
            <div class = "row mb-5">
                <?php
                    while(($sub_row=mysqli_fetch_assoc($package))){ 
                         $ns = mysqli_num_rows($sub_row);
                ?>
                <div class="col-lg-4 col-12 p-0">
                        
                        <div class="card">
                                    
<!--                                        <?php echo '<img class="card-img-top"  alt="Card image cap"                          src="data:image/jpeg;base64,'.base64_encode($sub_row['image'] ).'"/>'; ?>-->
                                    <img class="card-img-top" src="images/travel5.jpg" alt="Card image cap">
                                    <div class="card-body">

                                       <div class="row">
                                               <div class="col-6">
                                                   <p class="place"><?php echo htmlentities($sub_row['package_name']); ?></p>
                                                   <p class="days" style=" font-weight:bolder;"><?php echo htmlentities($sub_row['nights']); ?> nights &amp; <?php echo htmlentities($sub_row['days']); ?> days</p>

                                               </div>
                                               <div class="col-6">
                                                    <h5 class="card-title price float-right" style=" font-weight:bolder;">Price: Rs <?php echo htmlentities($sub_row['price']); ?></h5>

                                                  <button type="button" class="btn btn-danger packages-detail-btn float-right"><a href="itinerary.php?pkg_id=<?php echo htmlentities($sub_row['package_id']);?>">VIEW DETAILS</a></button>

                                               </div>

                                        </div>

                                        </div>

                              </div>
                        
                </div>
                <?php } ?>
            </div>
            
           
           
   
              
              
              
              
        </div>
            
        <hr class="divider"> 


            <!-- google reviews section 
    

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