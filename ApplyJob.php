<?php

include("config.php");

$JobId = $_GET['id'];


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	

    $targetDir = "Resume";

    $fileName = basename($_FILES["resume"]["name"]);
    $targetFilePath = $targetDir."/".$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  // Allow certain file formats
  $allowTypes = array('pdf','doc','docx','gif');
  if(in_array($fileType, $allowTypes)){
      // Upload file to server
      if(move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)){
		

      }else{
          $statusMsg = "Sorry, there was an error uploading your file.";
      }
  }else{
      $statusMsg = 'Sorry PDF files are allowed to upload.';
  }


    $sqlquery = "INSERT INTO `participant`(                                            
        `name`,
		`email`,
		`phone`,
        `JobId`,
        `resume`
        
    )
    VALUES(
        '$name',
        '$email',
        '$phone',
        '$JobId',
		'$targetFilePath'

    )";
        
        if ($conn->query($sqlquery) === TRUE) {
			echo '<script language="javascript">';
			echo 'alert("Successfully Applied"); location.href="Job.php"';
			echo '</script>';
        } else {
            echo "Error: " . $sqlquery . "<br>" . $conn->error;
        }

}
     
            
?>

<!----- Footer ------>
<?php require  'header.php' ?>
<!----- Footer ------>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="350">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Apply Now</h1>
			</div>
		</div>
	</section>
	<!-- End section -->
 
	<main>
    <div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Login</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

    <section id="hero" class="login">
    	<div class="container">
        	<div class="row justify-content-center">
            	<div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                	<div id="login">
                    		<div class="text-center"><img src="img/logo.png" alt="Image" data-retina="true" ></div>
                            <hr>

                           <form action="#" autocomplete="off" method='post' enctype="multipart/form-data">
                           <div class="form-group">
                                	<label>Email</label>
                                    <input type="email" name="email" class=" form-control" placeholder="Email" required>
                                   
                                </div>
                                <div class="form-group">
                                	<label>Name</label>
                                    <input type="text" name="name" class=" form-control" placeholder="Name" required>
                                   
                                </div>
                               
                                <div class="form-group">
                                	<label>Phone</label>
                                    <input type="number" name="phone" class=" form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                	<label>Upload Your Resume</label>
                                    <input type="file" name="resume" class="form-control" required>
                                </div>
                                
                                <div id="pass-info" class="clearfix"></div>
                                <button class="btn_full"> Apply </button>
                            </form>

                        </div>
                        
                </div>
            </div>
        </div>
    </section>
	</main><!-- End main -->

<!----- Footer ------>
<?php require  'footer.php' ?>
<!----- Footer ------>