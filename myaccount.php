<?php

require_once "session.php";


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
                            <li><a href="logout.php">Sign out</a></li>
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
						<a href="index.html"><img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true" class="logo_sticky"></a>
					</div>
				</div>
				<nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
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
							<li class="submenu">
                                <a href="about.php" class="show-submenu">About</a>                               
                            </li>
                            <li class="submenu">
                                <a href="contact.php" class="show-submenu">Contact Us</a>                               
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
				<h1>My Account</h1>
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
				<nav>
					<ul>
						<li><a href="#section-1" class="icon-booking"><span>Bookings</span></a>
						</li>
						
						<li><a href="#section-4" class="icon-profile"><span>Profile</span></a>
						</li>
					</ul>
				</nav>
				<div class="content">

					<section id="section-1">
						<div id="tools">
							<div class="row">
								<div class="col-lg-2 col-md-3 col-6">
									<div class="styled-select-filters">
										<select name="sort_type" id="sort_type">
											<option value="" selected>Sort by type</option>
											<option value="tours">Inbound</option>
											<option value="hotels">OutBound</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2 col-md-3 col-6">
									<div class="styled-select-filters">
										<select name="sort_date" id="sort_date">
											<option value="" selected>Sort by date</option>
											<option value="oldest">Oldest</option>
											<option value="recent">Recent</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--/tools -->

						

						<?php 

						$sql = "SELECT
						packages.duration,
						orders.createdOn,
						packages.shortTitle,
						packages.cost,
						orders.amount,
						orders.status
						FROM
							orders
						INNER JOIN packages ON orders.pkId = packages.PkId
						where orders.email = '$login_session'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {													  
								$Duration = $row["duration"];
								$short_Title = $row["shortTitle"];
								$Cost = $row["cost"];
								$BookingAmount = $row["amount"];
								$Status  = $row["status"];
								$createdOn  = $row["createdOn"];
								$Due = $Cost - $BookingAmount;

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
									<h3 class='hotel_booking'>$short_Title<span> $Duration</span></h3>
								</div>
								<div class='col-lg-2 col-md-3'>
									<ul class='info_booking'>
										<li><strong>Due Amount</strong>$Due BDT</li>
										<li><strong>Booked on</strong> $createdOn </li>
									</ul>
								</div>
								<div class='col-lg-2 col-md-2'>
									<div class='booking_buttons'>
										<a href='#0' class='btn_2'>Edit</a>
										<a href='#0' class='btn_3'>$Status</a>
									</div>
								</div>
							</div>
							</div>";

							}
						}
							
							?>


						<!-- End strip booking -->

						

					</section>
					<!-- End section 1 -->

					<?php

						$ses_sql = mysqli_query($conn,"select * from users where email = '$login_session' ");
						$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);  

						if(!empty($row)){
						$email = $row['email'];
						$name = $row['username'];
						$phone = $row['phone'];
						$password = $row['password'];

						}

					?>

					

					<section id="section-4">
						<div class="row">
							<div class="col-md-6">
								<h4>Your profile</h4>
								<ul id="profile_summary">
									<li>Username <span><?php echo $name ?></span>
									</li>
									<li>Email <span><?php echo $email ?></span>
									</li>
									<li>Phone number <span><?php echo $phone ?></span>
									</li>
									
								</ul>
							</div>
							<div class="col-md-6">
								<p>
								<img src="img/tourist_guide_pic.jpg" alt="Image" class="img-fluid styled profile_pic">
								</p>
							</div>
						</div>
						<!-- End row -->

						<div class="divider"></div>
					<form action="#" method="post"  autocomplete="off">
						<div class="row">
							<div class="col-md-12">
								<h4>Edit profile</h4>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" name="name" value="<?php echo $name ?>" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" value="<?php echo $email ?>" type="email">
								</div>
							</div>
						</div>
						<!-- End row -->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone number</label>
									<input class="form-control" name="phone" value="<?php echo $phone ?>" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone number</label>
									<input class="form-control" name="password" value="<?php echo $password ?>" type="text">
								</div>
							</div>
						</div>
						<!-- End row -->


							<hr>
							<button type="submit" class="btn_1 green">Update Profile</button>
					</form>
					</section>
					<!-- End section 4 -->
					<?php 

						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$Name = $_POST['name'];
							$Email = $_POST['email'];
							$Phone = $_POST['phone'];
							$Password = $_POST['password'];
												
								$sqlquery = "UPDATE
								`users`
							SET
								
								`username` = '$Name',
								`email` = '$Email',
								`phone` = '$Phone',
								`password` = '$Password'
							WHERE
								email='$login_session'";
									

									if ($conn->query($sqlquery) === TRUE) {
										echo '<script>alert("profile Updated Succesfully")</script>';
										
									}
						
							}
																											
						?>

			

					</div>
					<!-- End content -->
				</div>
				<!-- End tabs -->
			</div>
			<!-- end container -->
	</main>
	<!-- End main -->


<?php include "footer.php" ?>