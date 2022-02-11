<?php
   include('session.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
   

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="../img/logo.png" alt="Logo">
                </a>
                <a href="index.php" class="logo logo-small">
                   <h6>FlyFar LAdies</h6>
                </a>
            </div>
            <!-- /Logo -->

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">

                <!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="fe fe-bell"></i> <span class="badge badge-pill">1</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profile.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Farhana </span> Schedule <span class="noti-title">her appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>

							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="#">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profile.jpg" width="31"
                                alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profile.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <!-- #Username -->
                                <h6> <?php echo $userName; ?> </h6>
                            </div>
                        </div>
                        <a class="dropdown-item" href="">My Profile</a>
                        <a class="dropdown-item" href="">Settings</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->
            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

        
        <!--- Sidebar --->

                
            
            <div class='sidebar' id='sidebar'>
                <div class='sidebar-inner slimscroll'>
                    <div id='sidebar-menu' class='sidebar-menu'>
                        <ul>
                            <li class='menu-title'>
                                <span>Main</span>
                            </li>
                            <li>
                                <a href='dashboard.php'><i class='fe fe-home'></i> <span>Dashboard</span></a>
                            </li>
                            
                            <li>
                                <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Packages</span></a>
                                    <ul>
                                        <li><a href='Packages/Add.php'><i class='fe fe-layout'></i> <span>Add</span></a></li>
                                        <li><a href='Packages'><i class='fe fe-layout'></i> <span> View</span></a> </li>
                                        <li><a href='Packages/Edit.php'><i class='fe fe-layout'></i> <span> Edit</span></a> </li>
                                        
                                    </ul>
                            </li>

                            <li>
                                <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Job</span></a>
                                    <ul>
                                        <li><a href='Job/Add.php'><i class='fe fe-layout'></i> <span>Add</span></a></li>
                                        <li><a href='Job'><i class='fe fe-layout'></i> <span> View</span></a> </li>
                                        <li><a href='Job/Candidates.php'><i class='fe fe-layout'></i> <span> Candidates</span></a> </li>
                                        <li><a href='Job/Edit.php'><i class='fe fe-layout'></i> <span> Edit</span></a> </li>
                                        
                                    </ul>
                            </li>
                            <li>
                                <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Stock Photos</span></a>
                                    <ul>
                                        <li><a href='StockPhoto/Add.php'><i class='fe fe-layout'></i> <span>Add</span></a></li>
                                        <li><a href='StockPhoto'><i class='fe fe-layout'></i> <span> View</span></a> </li>
                                        <li><a href='StockPhoto/Edit.php'><i class='fe fe-layout'></i> <span> Edit</span></a> </li>
                                        
                                    </ul>
                            </li>

                            <li>
                                <a data-toggle='dropdown'><i class='fe fe-layout'></i> <span>Gallery</span></a>
                                    <ul>
                                        <li><a href='Gallery/AddAlbum.php'><i class='fe fe-layout'></i> <span> Add Album</span></a> </li>
                                        <li><a href='Gallery/Add.php'><i class='fe fe-layout'></i> <span>Add Image</span></a></li>
                                        <li><a href='Gallery'><i class='fe fe-layout'></i> <span> View</span></a> </li>
                                        <li><a href='Gallery/Edit.php'><i class='fe fe-layout'></i> <span> Edit</span></a> </li>
                                        
                                    </ul>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
                </div>

      
        <!--- Sidebar --->



        <!-- Page Wrapper -->

            <div class='page-wrapper'>
            <div class='content container-fluid'>

                
                <div class='page-header'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <h3 class='page-title'>Dashboard</h3>
                            <ul class='breadcrumb'>
                                <li class='breadcrumb-item'> <a href='dashboard.php'>Dashboard</a></li>
                                <li class='breadcrumb-item active'>Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h1> You Have No Permission</h1>
                              
            </div>
        </div>

            
        

        <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->
  <!-- jQuery -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
			<!-- Bootstrap Core JS -->
			<script src="assets/js/popper.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<!-- Slimscroll JS -->
			<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
			<!-- Datatables JS -->
			<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="assets/plugins/datatables/datatables.min.js"></script>
			<!-- Custom JS -->
			<script  src="assets/js/script.js"></script>
</body>

</html>