<?php

include 'header.php'


?>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1> All Packages</h1>                                  
            </div>
        </div>
 </section>
                        <!-- End Section -->
    
                        

	<main>
	<div class="container margin_60">
    
        <div class="main_title">
            <h2>Most <span>Propular</span>  Tours</h2>
            <p>Check out the Most Popular Tours deals below to book your holiday for the best price!.</p>
        </div>
        
        <div class="row">

		<?php
		
		    
		    if(array_key_exists('search',$_GET)){
		        $search = $_GET['search'];
		        
		        $sql = "SELECT * FROM packages WHERE tourType LIKE '$search%'";
    			$result = $conn->query($sql);
    
    			if ($result->num_rows > 0) {
    				while($row = $result->fetch_assoc()) {													  
    					$PackageId = $row["id"];
    					$img = $row["coverimage"];
    					$Short_Title = $row["shortTitle"];
    					$LongTitle = $row["longTitle"];
    					$Type  = $row["tourType"];
    					$Cost  = $row["cost"];
    				       
    					echo "<div class='col-lg-4 col-md-6 wow zoomIn' data-wow-delay='0.1s'>
    								<div class='tour_container'>
    									<div class='ribbon_3 popular'><span>New</span></div>
    									<div class='img_container'>
    										<a href='packages.php?id=$PackageId&title=$LongTitle'>
    										<img src='Admin/Packages/$img' width='800px' height='533px' class='img-fluid' alt='Image'>
    										<div class='short_info'>
    											<i class='icon_set_1_icon-44'></i>$Type<span class='price'><sup>৳</sup>$Cost</span>
    										</div>
    										</a>
    									</div>
    									<div class='tour_title'>
    										<h3><strong>$Short_Title</strong> tour</h3>
    										<div class='rating'>
    											<i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile'></i><small>(75)</small>
    										</div>
    									</div>
    								</div>
    							</div>";
    				}
    			}
		        
		        
		    }else{
		        
			$sql = "SELECT * FROM packages ORDER BY id DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {													  
					$PackageId = $row["id"];
					$img = $row["coverimage"];
					$Short_Title = $row["shortTitle"];
					$LongTitle = $row["longTitle"];
					$Type  = $row["tourType"];
					$Cost  = $row["cost"];
				       
					echo "<div class='col-lg-4 col-md-6 wow zoomIn' data-wow-delay='0.1s'>
								<div class='tour_container'>
									<div class='ribbon_3 popular'><span>New</span></div>
									<div class='img_container'>
										<a href='packages.php?id=$PackageId&title=$LongTitle'>
										<img src='Admin/Packages/$img' width='800px' height='533px' class='img-fluid' alt='Image'>
										<div class='short_info'>
											<i class='icon_set_1_icon-44'></i>$Type<span class='price'><sup>৳</sup>$Cost</span>
										</div>
										</a>
									</div>
									<div class='tour_title'>
										<h3><strong>$Short_Title</strong> tour</h3>
										<div class='rating'>
											<i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile'></i><small>(75)</small>
										</div>
									</div>
								</div>
							</div>";
				}
			}
		}


		?>
          
            
        </div><!-- End row -->
		
        <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p>
    </div><!-- End container -->
    
   
    </main>
	<!-- End main -->
	
<!----- Foooter ----->
<?php include "footer.php" ?>
<!----- Foooter ----->