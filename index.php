<?php

include 'config.php'


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
	<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
	<script src="js/team.js"></script>

	
</head>
<body>

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

     <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>+8801755582111</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="login.php" ><b>My Account</b></a></li>
                                                       
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
        </div><!-- container -->
    </header><!-- End Header -->
    
	<section id="search_container">
		<div id="search">
			<ul class="nav nav-tabs">
				<li><a href="#tours" data-toggle="tab" class="active show">Packages</a></li>
				
			</ul>

			<div class="tab-content">
				<div class="tab-pane active show" id="tours">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Search terms</label>
								<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Type your search terms">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Category</label>
								<select class="ddslick" name="category">
									<option value="0" data-imagesrc="img/icons_search/all_tours.png" selected>All tours</option>
									<option value="1" data-imagesrc="img/icons_search/sightseeing.png">Inbound</option>
									<option value="2"  data-imagesrc="img/icons_search/museums.png">Out Bound</option>																	
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label><i class="icon-calendar-7"></i> Date</label>
								<input class="date-pick form-control" data-date-format="M d, D" type="text">
							</div>
						</div>
												
						<div class="col-md-2 align-self-center">
							<div class="form-group">
								<button class="btn_1 green"><i class="icon-search"></i>Search now</button>							
							</div>
						</div>
					</div>
					<!-- End row -->
					
				</div>
				<!-- End rab -->
								
			</div>
		</div>
	</section>
	<!-- End hero -->

	<main>
	<div class="container margin_60">
    
        <div class="main_title">
            <h2>Most <span>Propular</span> Tours</h2>
            <p>Check out the Most Popular Tours deals below to book your holiday for the best price!.</p>
        </div>
        
        <div class="row">

		<?php

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

		?>
          
            
        </div><!-- End row -->
		
        <p class="text-center nopadding">
            <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (144) </a>
        </p>
    </div><!-- End container -->
    
    <div class="white_bg">

		<section class="promo_full">
			<div class="promo_full_wp magnific">
				<div>
					<h3>BELONG ANYWHERE</h3>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
					</p>
					<a href="https://www.youtube.com/watch?v=JNctI8tDBmc" class="video"><i class="icon-play-circled2-1"></i></a>
				</div>
			</div>
		</section>
		<!-- End section -->

		

		<div class="container margin_60">

			<div class="main_title">
				<h2>Our Team</h2>
			</div>
			<div class="row">
      <div class="col-6">
      </div>
      <div class="col-6 text-right">
        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
          <i class="fa fa-arrow-left">Prev</i>
        </a>
        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
          <i class="fa fa-arrow-right"> Next</i>
        </a>
      </div>
      <div class="col-12">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            
            <div class="carousel-item">
              <div class="row">

                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            
            <div class="carousel-item">
              <div class="row">
                           <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
			<!--End row -->


			<div class="container margin_60">
				<div class="main_title">
					<h2>Lates <span>Blog</span> News</h2>
					<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
				</div>
	
				<div class="row">
						<div class="col-lg-6">
							<a class="box_news" href="blog.html">
								<figure><img src="img/news_home_1.jpg" alt="">
									<figcaption><strong>28</strong>Dec</figcaption>
								</figure>
								<ul>
									<li>Mark Twain</li>
									<li>20.11.2017</li>
								</ul>
								<h4>Pri oportere scribentur eu</h4>
								<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
							</a>
						</div>
						<!-- /box_news -->
						<div class="col-lg-6">
							<a class="box_news" href="blog.html">
								<figure><img src="img/news_home_2.jpg" alt="">
									<figcaption><strong>28</strong>Dec</figcaption>
								</figure>
								<ul>
									<li>Jhon Doe</li>
									<li>20.11.2017</li>
								</ul>
								<h4>Duo eius postea suscipit ad</h4>
								<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
							</a>
						</div>
						<!-- /box_news -->
						<div class="col-lg-6">
							<a class="box_news" href="blog.html">
								<figure><img src="img/news_home_3.jpg" alt="">
									<figcaption><strong>28</strong>Dec</figcaption>
								</figure>
								<ul>
									<li>Luca Robinson</li>
									<li>20.11.2017</li>
								</ul>
								<h4>Elitr mandamus cu has</h4>
								<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
							</a>
						</div>
						<!-- /box_news -->
						<div class="col-lg-6">
							<a class="box_news" href="blog.html">
								<figure><img src="img/news_home_4.jpg" alt="">
									<figcaption><strong>28</strong>Dec</figcaption>
								</figure>
								<ul>
									<li>Paula Rodrigez</li>
									<li>20.11.2017</li>
								</ul>
								<h4>Id est adhuc ignota delenit</h4>
								<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
							</a>
						</div>
						<!-- /box_news -->
					</div>
					<!-- /row -->
					<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
			</div>
			<!-- End row -->
        
    	</div>
		<!-- End container -->
    </main>
	<!-- End main -->
	
<!----- Foooter ----->
<?php include "footer.php" ?>
<!----- Foooter ----->