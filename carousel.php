				<div id="carouselExample" class="carousel slide w-100 mt-5" data-ride="carousel">
					<div class="carousel-inner">
                    <?php  
                        
                        $numrows = mysqli_num_rows($team_detail);
                        if($numrows%3 == 0){
                    $count = $numrows / 3;
                    $countdum = $count;
                        while($count>0)
                        {
                        
                        
                       ?>
                       
                       
                        
                        
                    
	    				<div class="carousel-item <?php if($count == $countdum){
                                                            echo 'active';
                                                                } ?>">
	      					<div class="row">
	      					<?php
                            $count--;
                             $innercount = 0;
                            while(($team=mysqli_fetch_assoc($team_detail)) && ($innercount < 3))        { 
                                 
                                ?>
	      						<div class="col-lg-3 col-6 team-div p-0">
	      							<img src="images/travel.jpg" class="d-flex justify-content-center">
	      							<div style="color:white;" class="mt-3"><p class="d-flex justify-content-center person-name"><?php echo htmlentities($team['name']); ?></p>
	      							
	      							<p class="d-flex justify-content-center person-designation"><?php echo htmlentities($team['designation']); ?></p></div>
	      							
	      							

	      						</div>
                                 
                                        <?php  $innercount++;
                                      
                                        
                                            
                                        } ?>
                                        

	      						
	      						
	      					</div>
	    				</div>
                        <?php  } 
                        
                        }
                        ?>

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