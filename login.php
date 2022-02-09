<?php

include("config.php");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
 
   $userEmail = mysqli_real_escape_string($conn,$_POST['userEmail']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['userPassword']); 


   
   $sql = "SELECT id FROM users WHERE email = '$userEmail' and password = '$mypassword'";

   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
   $count = mysqli_num_rows($result);


   if($count == 1) {
        $_SESSION['login_user'] = $userEmail;      
        header("location:myaccount.php");
    }


}
     
            
?>

<!----- Footer ------>
<?php require  'header.php' ?>
<!----- Footer ------>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="350">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Login</h1>
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

                           <form action="#" autocomplete="off" method='post'>
                                
                                <div class="form-group">
                                	<label>Email</label>
                                    <input type="email" name="userEmail" class=" form-control" placeholder="Email" required>
                                </div>
                               
                                <div class="form-group">
                                	<label>Password</label>
                                    <input type="password" name="userPassword" class=" form-control" id="password" placeholder="Password" required>
                                </div>
                                
                                <div id="pass-info" class="clearfix"></div>
                                <button class="btn_full"> Login </button>
                            </form>

                        </div>
                        <div class="text-center">
                            Don’t have an account? <a href="register.php">Sign up</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
	</main><!-- End main -->

<!----- Footer ------>
<?php require  'footer.php' ?>
<!----- Footer ------>