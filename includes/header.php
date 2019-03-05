			<div class="row bgpink text-white upper-header fix-pos w-100">
	   	        <div class="col-12 col-lg-6 offset-lg-6 pt-2 pb-2 pl-1 pr-1 text-center d-flex align-items-center justify-content-center">
	   	        	<div class="about-us-link p-1 mr-lg-3 pl-2 pr-2 d-lg-block d-none">
	   	        		<a href="">ABOUT US</a>
	   	        	</div>
	   	        	<div class="upper-header-logo p-1 d-lg-block d-none"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
	   	        	<div class="upper-header-logo p-1 ml-lg-3 ml-1 d-lg-block d-none"><a href="#"><i class="fab fa-youtube"></i></a></div>
	   	        	<div class="upper-header-logo p-1 ml-lg-3 ml-1 d-lg-block d-none"><a href="#"><i class="fab fa-instagram"></i></a></div>
	   	        	<div class="upper-header-logo p-1 ml-lg-3 ml-1 d-lg-block d-none"><a href="#"><i class="fab fa-twitter"></i></a></div>
	   	        	<div class="upper-header-contact p-1 ml-lg-3 ml-1 pl-2 pr-2">
	   	        		<a href="tel:+91-7303969097"><i class="fa fa-phone mr-2"></i>+91-7303969097</a>
	   	        	</div>
	   	        	<div class="upper-header-contact p-1 ml-lg-3 ml-1 pl-2 pr-2 mr-lg-3">
	   	        		<a href="mailto:travelwithjatin@gmail.com"><i class="fa fa-envelope mr-2"></i>travelwithjatin@gmail.com</a>
	   	        	</div>
	            </div>
			</div>

			<!-- row for main header -->
			<div class="navbar main-header navbar-expand-md w-100 mb-4" role="navigation">
    			<a class="navbar-brand" href="#">
    				<img src="images/icons/logo.png" class="site-logo">
    			</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			        <i class="fa fa-bars"></i>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarCollapse">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item mr-2 active dropdown">
			                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Destinations<span class="sr-only">(current)</span></a>
			                <ul class="dropdown-menu" aria-labelledby="dropdown1">
			                <?php
			                $category=mysqli_query($con,"select * from destinations");
			                while($row=mysqli_fetch_assoc($category))
			                {
			                ?>
			                	<li class="dropdown-item dropdown mb-1" id="dropdown1-1">
			                		<a href="#" class="dropdown-toggle" id="dropdown1-1" aria-haspopup="true" aria-expanded="false">
			                			<i class="fa fa-chevron-right mr-2"></i>
			                			<?php echo htmlentities($row['name']); ?>
			                		</a>
			                			<?php
			                			$subcategory=mysqli_query($con,"select * from subdestinations WHERE destination_id = '".$row['id']."'");
                                        $subrows = mysqli_num_rows($subcategory);
                                        if($subrows>0){
                                        	?>
                                        	<ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="z-index:999;">
                                        	<?php
                                        	while($sub_row=mysqli_fetch_assoc($subcategory)){
                                        	?>
                                        	<li class="dropdown-item mb-1" href="#"><a><?php
                                        	echo htmlentities($sub_row['subdestination_name']);
                                        	?></a></li>
                                        	<?php	
                                        	}
                                        ?>
                                    		</ul>
                                        <?php
                                        }
			                			?>	
			                	</li>
			            	<?php } ?>
			            	</ul>

			            </li>
			            <li class="nav-item mr-2">
			                <a class="nav-link" href="#" target="_blank">Team</a>
			            </li>
			            <li class="nav-item mr-2">
			                <a class="nav-link disabled" href="#">Testimonial</a>
			            </li>
			            <li class="nav-item mr-2">
			                <a class="nav-link disabled" href="#">Blogs</a>
			            </li>
			            <li class="nav-item mr-2">
			                <a class="nav-link disabled" href="#">Pay</a>
			            </li>
			            <li class="nav-item mr-2">
			            	<a class="nav-link"><i class="fa fa-search"></i></a>
			            </li>
			        </ul>
			    </div>
			</div>
			