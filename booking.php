<?php

include 'session.php';
if(array_key_exists("pkId", $_GET)){
    $Id = $_GET['pkId'];
}

if(array_key_exists("pax", $_GET)){
    $pax = $_GET['pax'];
}

$sql = "SELECT * FROM packages where id='$Id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {													  
	$PackageId = $row["PKG-Id"];
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


?>

<!----- Header ----->
<?php include "header.php" ?>
<!----- Header ----->

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="200">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Booking</h1>
			</div>
		</div>
	</section>
	<!-- End Section -->

	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->
        
		<div class="container margin_60">
    <form action="checkout_hosted.php" method="POST" class="needs-validation">
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Package Price</h6>
                    </div>
                    <span class="text-muted"><?php echo $Cost ?></span>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Pax</h6>
                    </div>
                    <span class="text-muted"><?php echo $pax ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (BDT)</span>
                    <strong><?php $Total = $Cost * $pax; echo "$Total TK"; ?></strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Booking Money </span>
                    <input type="number" class="form-control" min="500" max="4000" name="amount" id="total_amount" required/>
                    <input type="hidden" class="form-control" value="<?php echo $PackageId; ?>" name="pkid" id="pkid" required/>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>           
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full name</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Kayes Fahim"
                                required>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Mobile</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number"
                                required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" name="customer_email" class="form-control" id="email"
                           placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                            required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Choose...</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option value="Dhaka">Dhaka</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">

                    <label for="same-address">Shipping address is the same as my billing
                        address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label for="save-info">Save this information for next time</label>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>

        </div>
</main>


<!----- Foooter ----->
<?php include "footer.php" ?>
<!----- Foooter ----->