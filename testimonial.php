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

            <div class="row w-100 text-white d-flex justify-content-center testimonial-row">
                
                <?php
            
                $test=mysqli_query($con,"select * from testimonials");
            
                $numrows = mysqli_num_rows($test);
                $count = 1;
                while($sub_row=mysqli_fetch_assoc($test)){
                    if($count % 2 == 0){
                
            ?>    
               <div class="col-3 float-left mt-4"></div>
                <div class="col-8 float-right testimonial-right mt-4 mr-5 p-0">
                
                 <div class="row w-100 text-white d-flex justify-content-center">
                    <div class="col-4  d-flex justify-content-center p-5"><img src="images/icons/inverted.png" class="inverted-c"></div>
                    <div class="col-4">
                        <h5 class="test-name"><?php echo htmlentities($sub_row['name']); ?></h5>
                        <div class="des-text "><p><?php echo $sub_row['package']; ?></p></div>
                        <div class="test-text"><p><?php echo $sub_row['comment']; ?></p></div>
                        
                    </div>
                   <div class="col-4 p-0"><img src="images/travel6.jpg" class="testimonial_pic w-100"></div>
                </div>
                
                </div>
               <?php } else { ?>
               
               
               
               
               
                <div class="col-8 float-left ml-5 testimonial-left mt-5 p-0">
                
                <div class="row w-100 text-white d-flex justify-content-center">
                    <div class="col-4 p-0"><img src="images/travel6.jpg" class="testimonial_pic w-100"></div>
                    <div class="col-4">
                        <h5 class="test-name"><?php echo htmlentities($sub_row['name']); ?></h5>
                        <div class="des-text "><p><?php echo $sub_row['package']; ?></p></div>
                        <div class="test-text"><p><?php echo $sub_row['comment']; ?></p></div>
                        
                    </div>
                    <div class="col-4  d-flex justify-content-center p-5"><img src="images/icons/inverted.png" class="inverted-c"></div>
                </div>
                
                
                </div>
                
                <div class="col-3 float-right mt-5"></div>
                
                <?php } $count++; ?>
                
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