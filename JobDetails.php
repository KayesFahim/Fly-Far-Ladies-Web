<?php

include 'config.php';

$Id = $_GET['id'];

$sql = "SELECT * FROM job where id='$Id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {													  
	$JobId = $row["JobId"];
	$Category = $row["category"];
	$Title = $row["title"];
	$Description = $row["description"];
	
						
	}
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
    <title><?php echo $Title; ?></title>

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
                            <li><a href="login.php"><b>My Account</b></a></li>
                                                       
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
                                <a href="StockPhoto.php" class="show-submenu">Stock Photos</i></a>
                            </li>
                            <li class="submenu">
                                <a href="Gallery.php" class="show-submenu">Gallery </i></a>                               
                            </li>
                            <li class="submenu">
                                <a href="Job.php" class="show-submenu">Restaurants </a>                               
                            </li>
                             
                            
                        </ul>
                    </div><!-- End main-menu -->
                    
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

	<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-2">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1><?php echo $Title?></h1>
						<span><?php echo $Category; ?></span>
						<span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
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
					<li><?php echo $Title; ?></li>
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

					<div class="row">
						<div class="col-lg-12">
							<h4>Job Description</h4>
							<p>
								<?php echo $Description; ?>
							</p>
							
							
							<!-- End row  -->
						</div>
					</div>

				</div>
				<!--End  single_tour_desc-->
				
				<aside class="col-lg-4">
					
					
					
					
					
					<div class="box_style_1 expose">
						
                        <a href="ApplyJob.php?id=<?php echo $JobId; ?>" class="btn_full">Apply Now</a>
	
					</div>
					<!--/box_style_1 -->

				</aside>
			</div>
			<!--End row -->
		</div>
		<!--End container -->

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