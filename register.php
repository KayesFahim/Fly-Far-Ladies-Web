<?php require  'config.php';

$sql = "SELECT * FROM users ORDER BY CSR_Id DESC LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $outputString = preg_replace('/[^0-9]/', '', $row["CSR_Id"]);
                                    $number= (int)$outputString + 1;
                                    $CSR_Id = "CSR-$number";								
                             }
                            } else {
                                $CSR_Id ="CSR-1000";
                            
                            }

								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									$Name = $_POST['username'];
									$Email = $_POST['email'];
                                    $Phone = $_POST['phone'];
									$Password = $_POST['password1'];
									$Confirm_Password = $_POST['password2'];


                                    if($Password == $Confirm_Password){

                                        $sqlquery = "INSERT INTO `users`(   
                                            `CSR_Id`,                                       
                                            `username`,
                                            `email`,
                                            `phone`,
                                            `password`										
                                        )
                                        VALUES(
                                            '$CSR_Id',
                                            '$Name',
                                            '$Email',
                                            '$Phone',                                      
                                            '$Password'
                                            
                                        )";
                                            
    
                                            if ($conn->query($sqlquery) === TRUE) {
                                                header("location:login.php");
                                                die();
                                                
                                                
                                            }
                                  
                                    }else{
                                        echo '<script>alert("Password Doesnt Match")</script>';
                                    }
																													
								}

							?>
<!----- Footer ------>
<?php require  'header.php' ?>
<!----- Footer ------>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="350">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Register</h1>
			</div>
		</div>
	</section>
	<!-- End section -->
 
	<main>
    <div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Register</li>
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
                                	<label>Full Name</label>
                                    <input type="text" name="username" class=" form-control"  placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                	<label>Email</label>
                                    <input type="email" name="email" class=" form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                	<label>Phone</label>
                                    <input type="number" name="phone" class=" form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                	<label>Password</label>
                                    <input type="password" name="password1" class=" form-control" id="password1" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                	<label>Confirm password</label>
                                    <input type="password" name="password2" class=" form-control" id="password2" placeholder="Confirm password" required>
                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <button class="btn_full">Create an account</button>
                            </form>
                            
                            <div class="text-center">
                                Alredy have an account? <a href="login.php">Login Now</a>
                             </div>
                           
                        </div>
                </div>
            </div>
        </div>
    </section>
	</main><!-- End main -->

<!----- Footer ------>
<?php require  'footer.php' ?>
<!----- Footer ------>