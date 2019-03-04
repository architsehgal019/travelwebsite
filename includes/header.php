<div class="row bgpink text-white upper-header fix-pos w-100">
	   	        <div class="col-12 col-lg-6 offset-lg-6 p-2 text-center d-flex align-items-center justify-content-center">
	   	        	<div class="about-us-link p-1 mr-3 pl-2 pr-2">
	   	        		<a href="">ABOUT US</a>
	   	        	</div>
	   	        	<div class="upper-header-logo p-1"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
	   	        	<div class="upper-header-logo p-1 ml-3"><a href="#"><i class="fab fa-youtube"></i></a></div>
	   	        	<div class="upper-header-logo p-1 ml-3"><a href="#"><i class="fab fa-instagram"></i></a></div>
	   	        	<div class="upper-header-logo p-1 ml-3"><a href="#"><i class="fab fa-twitter"></i></a></div>
	   	        	<div class="upper-header-contact p-1 ml-3 pl-2 pr-2">
	   	        		<a href="tel:+91-7303969097"><i class="fa fa-phone mr-2"></i>+91-7303969097</a>
	   	        	</div>
	   	        	<div class="upper-header-contact p-1 ml-3 pl-2 pr-2 mr-3">
	   	        		<a href="mailto:travelwithjatin@gmail.com"><i class="fa fa-envelope mr-2"></i>travelwithjatin@gmail.com</a>
	   	        	</div>
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
					<div class="col-lg-9 col-12 d-flex align-items-right justify-content-end pr-5">
						<nav class="navbar navbar-expand-lg float-right">
							<div class="collapse navbar-collapse mx-auto" id="dropdownmenu">
								<ul class="navbar-nav mx-auto text-uppercase main-ul">
									<li class="nav-item mx-3 dropdown">
                                        <a href="#" class="menu-items nav-link " id ="dropdown_submenu" role="button" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false">Destinations<i class="fa fa-chevron-down ml-2"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown_submenu">
                                        
<!--                                        PHP CODE STARTS                               -->
                                       
                                        <?php 

                            $category=mysqli_query($con,"select * from destinations");
                            
                            while($row=mysqli_fetch_assoc($category))
                                {
                                
                                
                          
                               
                                
                  ?>										
										
                                        
<!--                                        <li class="nav-item dropdown">-->
<!--                                            <a class="nav-link dropdown-toggle" id ="dropdown_submenu" role="button" data-toggle="dropdown" aria-hospopup="true" aria-expanded="false" href="./products.php"></a>-->
                                                

                                               
                                                    
                      
                                               
                                                <a class="dropdown-item p-1 "><i class="fa fa-chevron-right mr-4"></i>
<!--                                                <div class="dropdown-menu" aria-labelledby="dropdown_submenu">-->
                                                <?php echo htmlentities($row['name']);
                                
                                               $subcategory=mysqli_query($con,"select * from subdestinations WHERE destination_id = '".$row['id']."'");
                                               $subrows = mysqli_num_rows($subcategory);
                                               
                                        if($subrows>0){
                                               while($sub_row=mysqli_fetch_assoc($subcategory))
                                                {?>
                                            <div class="sub-cat-menu" >
                                               <a class="dropdown-item-sub p-1" href="./products.php" style="float: left;
                                                width: 50%;
                                                padding: 0;
                                                margin: 0;
                                                font-size: 9px;!important
                                                  text-transform: lowercase;
                                             display:none;

<!--                                                text-transform: capitalize;-->
                                                font-weight: 600;
                                                    background-color:black;">
                                                     <?php echo htmlentities($sub_row['subdestination_name']);
                                                      
                                               
                                               }
                                        }
                                                    
                                                    
                            }                    ?></a></div></a>
                                                
                                         
                                                </div>
                                       </li>
										

               
                                       
<!--                                           PHP CODE ENDS-->
                                        
                                        
									
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">team</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">testimonial</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">BLOGS</a>
									</li>
									<li class="nav-item mx-3">
										<a href="#" class="menu-items">pay</a>
									</li>
<!--
									<li class="nav-item ">
										<a href="#" class="menu-items"><img src="images/icons/honeymoonnewlogo.jpg" style="font-size:10px;"></a>
									</li>
-->
								</ul>
								<button class="btn" type="button"><i class="fa fa-search"></i></button>
						<a href="#"><img src="images/icons/honeymoonnewlogo.png" class="honeymoon-logo" ></a>
							</div>
						</nav>
					</div>
<!--
					<div class="col-lg-2 col-12 mb-1 d-flex align-items-center justify-content-end">
						<button class="btn" type="button"><i class="fa fa-search"></i></button>
						<a href="#"><img src="images/icons/honeymoonnewlogo.png" class="honeymoon-logo"></a>
					</div>
-->
			</div>
			