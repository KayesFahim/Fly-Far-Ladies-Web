<?php

require_once "config.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
	<meta name="author" content="Ansonika">
	<title>Fly Far Ladies</title>

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
	
	<!-- SPECIFIC CSS -->
	<link href="css/admin.css" rel="stylesheet">
	
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>


	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<header>
		<div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="myaccount.php">My Account</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

		<div class="container">
			<div class="row">
				<div class="col-3">
					<div id="logo">
						<a href="index.html"><img src="img/logo.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_normal"></a>
						<a href="index.html"><img src="img/logo.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
					</div>
				</div>
				<nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo.png" width="160" height="34" alt="City tours" data-retina="true">
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
                                <a href="Job.php" class="show-submenu">Jobs </a>                               
                            </li>
                            
                            
                            
                             
                            
                        </ul>
                    </div><!-- End main-menu -->
                    
                </nav>
			</div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="350">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Job Section</h1>
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
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

		<div class="margin_60 container">
			<div id="tabs" class="tabs">

				<div class="content">

						<?php 

						$sql = "SELECT * FROM job ORDER BY id DESC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {													  
								$Id = $row["id"];
                                $JobId = $row["JobId"];
								$Title = $row["title"];
								$Categroy = $row["category"];								
								$createdOn  = $row["created"];
								$date=date_create("$createdOn");
								$Month = date_format($date,"m");
								$monthName = date("F", mktime(0, 0, 0, $Month, 10));

								$Day = date_format($date,"m");
								$dayName = date('l', strtotime($createdOn));
								

						echo "<div class='strip_booking'>
						<div class='row'>
								<div class='col-lg-2 col-md-2'>
									<div class='date'>
										<span class='month'>$monthName</span>
										<span class='day'><strong>$Day</strong>$dayName</span>
									</div>
								</div>
								<div class='col-lg-6 col-md-5'>
									<h3 class='hotel_booking'>$Title<span> $Categroy</span></h3>
								</div>
								<div class='col-lg-2 col-md-3'>
									<ul class='info_booking'>
										<li><strong>Posted ON</strong> $createdOn </li>
									</ul>
								</div>
								<div class='col-lg-2 col-md-2'>
									<div class='booking_buttons'>
										<a href='JobDetails.php?id=$Id' class='btn_2'>Details</a>
										<a href='ApplyJob.php?id=$JobId' class='btn_3'>Apply</a>
									</div>
								</div>
							</div>
							</div>";

							}
						}
							
							?>


						<!-- End strip booking -->

				
					</div>
					<!-- End content -->
				</div>
				<!-- End tabs -->
			</div>
			<!-- end container -->
	</main>
	<!-- End main -->


<?php include "footer.php" ?>