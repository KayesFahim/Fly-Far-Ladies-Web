<?php

include 'config.php';

$Id = $_GET['id'];

$sql = "SELECT * FROM packages where id='$Id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {													  
	$PackageId = $row["id"];
	$img = $row["coverimage"];
	$Long_Title = $row["longTitle"];
	$Short_Title = $row["shortTitle"];
	$Destination = $row["destination"];
	$Type  = $row["tourType"];
	$Cost  = $row["cost"];
	$Description = $row["description"];

	$PackageInclusion = $row["packageInclusion"];
	$duration = $row["duration"];
	$tourType = $row["tourType"];
	$tripPlan = $row["tripPlan"];
	$groupsize = $row["groupsize"];
	$packageCode  = $row["packageCode"];
	$tripTheme  = $row["tripTheme"];
	$sightImg1 = $row["sightImg1"];
	$sightImg2 = $row["sightImg2"];
	$sightImg3 = $row["sightImg3"];
	$sightImg4 = $row["sightImg4"];
	$exclusion = $row["exclusion"];

	$bookclosedate  = $row["bookclosedate"];
	$tourInclusion = $row["tourInclusion"];
	$terms = $row["terms"];
	$policy = $row["policy"];
	$operation = $row["operation"];
						
	}
}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$pax = $_POST['pax'];		
		$redirect = "booking.php?pax=$pax&pkId=$PackageId";
			header("Location: $redirect");
		}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title><?php echo $Long_Title; ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Montserrat:300,400,700" rel="stylesheet">

    <!-- COMMON CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

<header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>+8801755582111</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="login.php" id="access_link"><b>My Account</b></a></li>
                                                       
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="/">Fly Far Ladies</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/main-logo.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                         <ul>
                            <li class="submenu">
                                <a href="/" class="show-submenu">Home </i></a>                              
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Upcoming Package <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_tours_list.html">International</a></li>                                   
                                    <li class="third-level"><a href="javascript:void(0);">Inbound Tour</a>
                                        <ul>
                                            <li><a href="single_tour_fixed_sidebar.html">Day Long Tour</a></li>
                                            <li><a href="single_tour_with_gallery_fixed_sidebar.html">Night Out Tour</a></li>
                                            
                                        </ul>
                                    </li>                                   
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="gallery_4_columns.html" class="show-submenu">Stock Photos</i></a>
                            </li>
                            <li class="submenu">
                                <a href="gallery_3_columns.html" class="show-submenu">Gallery </i></a>                               
                            </li>
                            <li class="submenu">
                                <a href=" " class="show-submenu">Restaurants </a>                               
                            </li>
                             
                            
                        </ul>
                    </div><!-- End main-menu -->
                    
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

	<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo "Admin/Packages/$img"; ?>" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-2">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1><?php echo $Long_Title?></h1>
						<span><?php echo $Destination; ?></span>
						<span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
					</div>
					<div class="col-md-4">
						<div id="price_single_main">
							from/per person <span><sup>৳</sup><?php echo $Cost; ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End section -->

	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li><?php echo $Short_Title; ?></li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-8" id="single_tour_desc">

					<div id="single_tour_feat">
						<ul>
							<li><i class="icon_set_1_icon-4"></i>Museum</li>
							<li><i class="icon_set_1_icon-83"></i><?php echo $duration; ?></li>
							<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
							<li><i class="icon_set_1_icon-97"></i>Audio guide</li>
							<li><i class="icon_set_1_icon-29"></i>Tour guide</li>
						</ul>
					</div>

					<p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a></p>
					<!-- Map button for tablets/mobiles -->

					

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Description</h3>
						</div>
						<div class="col-lg-9">
							<h4><?php echo $Short_Title; ?></h4>
							<p>
								<?php echo $Description; ?>
							</p>
							<h3>What's include In Package</h3>
							<p>
								<?php echo "$PackageInclusion" ?>
							</p>

							<h3>What's include In Tours</h3>
							<p>
								<?php echo "$tourInclusion" ?>
							</p>

							<h3>What's Not Included</h3>
							<p>
								<?php echo "$exclusion" ?>
							</p>
							
							<!-- End row  -->
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Terms And Condition</h3>
						</div>
						<div class="col-lg-9">
							<p>
								<?php echo $terms; ?>
							</p>
														
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-lg-3">
							<h3>Reviews </h3>
							<a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>
						</div>

						<?php 
						$ses_sql = "SELECT * FROM review where Pkid='$PackageId' ORDER BY id DESC";
						$result = mysqli_query($conn,$ses_sql);
						$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
						$count = mysqli_num_rows($result);
						 ?>
						<div class="col-lg-9">
							<div id="general_rating"><?php echo $count; ?> Reviews
								<div class="rating">
									<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
								</div>
							</div>
							<!-- End general_rating -->
							<div class="row" id="rating_summary">
								<div class="col-md-6">
									<ul>
										<li>Price
											<div class="rating">
												<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</div>
										</li>
										
									</ul>
								</div>
								<div class="col-md-6">
									<ul>										
										<li>Quality
											<div class="rating">
												<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- End row -->
							<hr>
							<?php 

							$sql = "SELECT * FROM review where Pkid='$PackageId' ORDER BY id DESC LIMIT 3";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {													  
									$name = $row["name"];
									$comment = $row["comment"];
									$created  = $row["created"];

							echo "<div class='review_strip_single'>
									<img src='img/avatar1.jpg' alt='Image' class='rounded-circle'>
									<small> - $created -</small>
									<h4>$name</h4>
									<p>
										'$comment'
									</p>
									<div class='rating'>
										<i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile voted'></i><i class='icon-smile'></i><i class='icon-smile'></i>
									</div>
								</div>";

								}
							}
							
							

							?>
						</div>
					</div>
				</div>
				<!--End  single_tour_desc-->
				
				<aside class="col-lg-4">
					<p class="d-none d-xl-block d-lg-block d-xl-none">
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p>
					
					
					
					<form action="#" autocomplete="off" method='post'>
					<div class="box_style_1 expose">
						<h3 class="inner">- Booking -</h3>						
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Pax</label>
									<div class="numbers-row">
										<input type="text" value="1" name="pax" id="adults" class="qty2 form-control" name="quantity">
									</div>
								</div>
							</div>							
						</div>
						<br>
						
						<button class="btn_full" >Book now</button>
				</form>	
					</div>
					<!--/box_style_1 -->

					<div class="box_style_4">
						<i class="icon_set_1_icon-90"></i>
						<h4><span>Book</span> by phone</h4>
						<a href="tel://004542344599" class="phone">+8801755582111</a>
						<small>Sat to Thursaday At 9.30-6.30</small>
					</div>

				</aside>
			</div>
			<!--End row -->
		</div>
		<!--End container -->

		<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$pax = $_POST['pax'];
			
			$redirect = "booking.php?pax=$pax&ppkId=$PackageId&";
			header("Location: $redirect");
		}

		?>
		
	<div id="overlay"></div>
	<!-- Mask on input focus -->
		
	</main>
	<!-- End main -->

	

	<footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://+8801755582111" id="phone">+8801755582111</a>
                    <a href="mailto:info@flyfarladies.com" id="email_footer">info@flyfarladies.com</a>
                </div>
                <div class="col-md-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                         <li><a href="termscondition.php">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="refundpolicy.php">Refund Policy</a></li>
                        <li><a href="privacypolicy.php">Privacy Policy</a></li>
                         <li><a href="Gallery.php">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select name="lang" id="lang">
                            <option value="English" selected>English</option>
                            
                        </select>
                    </div>
                    <div class="styled-select">
                        <select name="currency" id="currency">
                            <option value="EUR">BDT</option>
                           
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="https://www.facebook.com/flyfarladies"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <h3 style="color:white;">© Fly Far Ladies 2022</h3>
                        <div class="slgonimg">
                            <img src="img/SSLCOMMERZ.png" class="img-fluid" alt="SSL Commerce" />
                        </div>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- Modal Review -->
	<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myReviewLabel">Write your review</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div id="message-review">
					</div>
					<form method="post" action="addReview.php" name="review_tour" id="review_tour">
						<input name="pkid" id="pkid" type="hidden" value="<?php echo $PackageId ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
								</div>
							</div>
						</div>
						<!-- End row -->

						<!-- End row -->
						<hr>
						<!-- End row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Price</label>
									<select class="form-control" name="price_review" id="price_review">
										<option value="">Please review</option>
										<option value="Low">Low</option>
										<option value="Sufficient">Sufficient</option>
										<option value="Good">Good</option>
										<option value="Excellent">Excellent</option>
										<option value="Superb">Super</option>
										<option value="Not rated">I don't know</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Quality</label>
									<select class="form-control" name="quality_review" id="quality_review">
										<option value="">Please review</option>
										<option value="Low">Low</option>
										<option value="Sufficient">Sufficient</option>
										<option value="Good">Good</option>
										<option value="Excellent">Excellent</option>
										<option value="Superb">Super</option>
										<option value="Not rated">I don't know</option>
									</select>
								</div>
							</div>
						</div>
						<!-- End row -->
						<div class="form-group">
							<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
						</div>

						<input type="submit" value="Submit" class="btn_1" id="submit-review">
					</form>


				</div>
			</div>
		</div>
	</div>
	<!-- End modal review -->
	


	<!-- Common scripts -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>

	<script>
		$('input.date-pick').datepicker('setDate', 'today');
		$('input.time-pick').timepicker({
			minuteStep: 15,
			showInpunts: false
		})
	</script>
	
	<script src="js/jquery.ddslick.js"></script>
	<script>
		$("select.ddslick").each(function() {
			$(this).ddslick({
				showSelectedHTML: true
			});
		});
	</script>
	
	<!-- Check box and radio style iCheck -->
	<script>
		$('input').iCheck({
		   checkboxClass: 'icheckbox_square-grey',
		   radioClass: 'iradio_square-grey'
		 });
	</script>

    <!-- Specific scripts -->
	<script src="js/tabs.js"></script>
	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>
	<script>
		$('.wishlist_close_admin').on('click', function (c) {
			$(this).parent().parent().parent().fadeOut('slow', function (c) {});
		});
	</script>
	
	
  </body>
</html>