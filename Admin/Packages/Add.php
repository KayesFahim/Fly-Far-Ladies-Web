<?php

require('../session.php');


$sql = "SELECT * FROM packages ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $outputString = preg_replace('/[^0-9]/', '', $row["PKG-Id"]);
		$PKG_Id = "PKG-".(int)$outputString + 1;									
 }
} else {
	$PKG_Id ="PKG-1000";

}

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$shortTitle = $_POST['sTitle'];
	$LongTitle = $_POST['lTitle'];
	$Description = $_POST['description'];
	$PkInclusion = $_POST['packageinclusion'];
	$PkExclusion = $_POST['packageexclusion'];
	$Duration = $_POST['duration'];
	$Destination = $_POST['destination'];
	$TourType = $_POST['type'];
	$TourTheme = $_POST['tripTheme'];
	$TourPlan = $_POST['plan'];
	$GroupSize = $_POST['groupsize'];
	$PkCode = $_POST['packageCode'];
	$Cost = $_POST['cost'];
	$TourInclusion = $_POST['tourinclusion'];
	$Terms = $_POST['terms'];
	$Policy = $_POST['policy'];
	//$Operation = $_POST['operation'];
	$BookCloseDate = $_POST['close'];


    $targetDir = "images/";
	mkdir("images/".$shortTitle, 0777, true);
    $fileName = basename($_FILES["coverimage"]["name"]);
    $targetFilePath = $targetDir."$shortTitle/" . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  // Allow certain file formats
  $allowTypes = array('jpg','png','jpeg','gif');
  if(in_array($fileType, $allowTypes)){
      // Upload file to server
      if(move_uploaded_file($_FILES["coverimage"]["tmp_name"], $targetFilePath)){
		

      }else{
          $statusMsg = "Sorry, there was an error uploading your file.";
      }
  }else{
      $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
  }


    $sqlquery = "INSERT INTO `packages`(                                            
        `PKG-Id`,
		`shortTitle`,
		`longTitle`,
		`description`,
		`packageInclusion`,
		`duration`,
		`destination`,
		`tourType`,
		`tripPlan`,
		`groupsize`,
		`packageCode`,
		`tripTheme`,
		`coverimage`,
		`sightImg1`,
		`sightImg2`,
		`sightImg3`,
		`sightImg4`,
		`cost`,
		`exclusion`,
		`bookclosedate`,
		`tourInclusion`,
		`terms`,
		`policy`,
		`operation`
    )
    VALUES(
        '$PKG_Id',
        '$shortTitle',
		'$LongTitle',
        '$Description',
		'$PkInclusion',
        '$Duration',
		'$Destination',
        '$TourType',
		'$TourPlan',
        '$GroupSize',
		'$PkCode',
        '$TourTheme',
		'$targetFilePath',
		' ',
		' ',
		' ',
		' ',
		'$Cost',
		'$PkExclusion',
		'$BookCloseDate',
		'$TourInclusion',
		'$Terms',
		'$Policy',
		' '

    )";
        
        if ($conn->query($sqlquery) === TRUE) {
			echo '<script language="javascript">';
			echo 'alert("Successfully Added"); location.href="index.php"';
			echo '</script>';
        } else {
            echo "Error: " . $sqlquery . "<br>" . $conn->error;
        }
                                                                                       
}


											
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Add Packages</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="../assets/css/feathericon.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">

    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
</head>
<body>
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		<div class="header">
			
			<!-- Logo -->
			<div class="header-left">
				<a href="../index.php" class="logo">
				 <img src="../assets/img/logo.png" alt="Logo">
				</a>
				<a href="../index.php" class="logo logo-small">
					<img src="../assets/img/profile.jpg" alt="Logo" width="30" height="30">
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
									<a href="">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="../assets/img/profile.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Employee </span> Schedule <span class="noti-title">her appointment</span></p>
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
						<span class="user-img"><img class="rounded-circle" src="../assets/img/profile.jpg" width="31" alt="Ryan Taylor"></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="../assets/img/profile.jpg" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<!-- #Username -->
								<h6>Admin</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="">My Profile</a>
						<a class="dropdown-item" href="">Settings</a>
						<a class="dropdown-item" href="login.php">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

	     
      
        <!-- Sidebar -->

		<?php
        	include '../sidebar.php';
        ?>	
			<!--- Sidebar --->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Add New Packages</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Add Packages</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				

				<!-- Contant -->
				<div class="row">					
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="text-danger card-title">Packages Information</h4>
									</div>
                                    
									<div class="card-body">
										<form action="#" autocomplete="off" method='post' enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label>Packages ID</label>
																<input type="text" value="<?php echo $PKG_Id ?>" class="form-control" disabled>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Short Title</label>
																<input type="text" name="sTitle" maxlength="15" class="form-control" required>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Long Title</label>
																<input type="text" name="lTitle" maxlength="50" class="form-control" required>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>Duration</label>
																<input type="text" name="duration" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Destination</label>
																<input type="text" name="destination" class="form-control" required>
															</div>
														</div>

                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Tour Type</label>
																<input type="text" name="type" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Trip Plan</label>
																<input type="text" name="plan" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Group Size</label>
																<input type="number" name="groupsize" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Package Code</label>
																<input type="text" name="packageCode" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Trip Theme</label>
																<input type="text" name="tripTheme" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Cost</label>
																<input type="number" name="cost" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Book Close Date</label>
																<input type="date" name="close" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Cover Image</label>
																<input type="file" id="coverimage" name="coverimage" class="form-control" required>
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Sight1 Image</label>
																<input type="file" name="sight1image" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Slight2 Image</label>
																<input type="file" name="sight2image" class="form-control" >
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Slight3 Image</label>
																<input type="file" name="sight3image" class="form-control">
															</div>
														</div>
                                                        <div class="col-md-3">
															<div class="form-group">
																<label>Slight4 Image</label>
																<input type="file" name="sight4image" class="form-control">
															</div>
														</div>
                                                    </div>
                                                    <div class="row">    
                                                        <div class="col-md-4">
															<div class="form-group">
																<label for="description">Description</label>
																<textarea class="form-control" id="description" name="description" rows="7"></textarea>
															</div>
														</div>

                                                        <div class="col-md-4">
															<div class="form-group">
																<label for="description">Package Inclusion</label>
																<textarea class="form-control" id="packageinclusion" name="packageinclusion" rows="7"></textarea>
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label for="description">Package Exclusion</label>
																<textarea class="form-control" id="packageexclusion" name="packageexclusion" rows="7"></textarea>
															</div>
														</div>
    
                                                        <div class="col-md-4">
															<div class="form-group">
																<label for="description">Term & Condition</label>
																<textarea class="form-control" id="terms" name="terms" rows="7"></textarea>
															</div>
														</div>

                                                        <div class="col-md-4">
															<div class="form-group">
																<label for="description">Policy</label>
																<textarea class="form-control" id="policy" name="policy" rows="7"></textarea>
															</div>
														</div>
                                                        <div class="col-md-4">
															<div class="form-group">
																<label for="description">Tour Inclusion</label>
																<textarea class="form-control" id="tourinclusion" name="tourinclusion" rows="7"></textarea>
															</div>
														</div>
                                                    </div>
                                                </div>
                                            </div>
											<div class="text-right">
												<button type="submit" class="btn btn-primary"> Add Packages </button>
											</div>
										</form>
									</div>
								</div>
							</div>

                            <!-- Contact Personal Info  --->
            
						</div>


					</div>
					<!-- End Contant -->
					</div>	                   
				</div>

				<!-- /Page Wrapper -->
			</div>
			<!-- /Main Wrapper -->
			<input type="hidden" id="refresh" value="no">

			<script>
				jQuery( document ).ready(function( $ ) {
				//Use this inside your document ready jQuery 
				$(window).on('popstate', function() {
				location.reload(true);
				});

				});
			</script>
			<!-- jQuery -->
			<script src="../assets/js/jquery-3.2.1.min.js"></script>
			<!-- Bootstrap Core JS -->
			<script src="../assets/js/popper.min.js"></script>
			<script src="../assets/js/bootstrap.min.js"></script>
			<!-- Slimscroll JS -->
			<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
			<!-- Datatables JS -->
			<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="../assets/plugins/datatables/datatables.min.js"></script>
			<!-- Custom JS -->
			<script  src="../assets/js/script.js"></script>
	</body>
</html>

