<?php include "header.php";



?>


	<section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Gallery page</h1>
				<p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
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
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End Position -->

		<div class="container margin_60">
			<div class="main_title">
				<h2>Some <span>images</span> from travellers</h2>
				<p>
					Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
				</p>
			</div>
			<hr>
			<div class="row add_bottom_60">
			<?php

			$sql = "SELECT * FROM album Group BY id DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {													  
					$img = $row["coverimage"];
					$album = $row["name"];
									       
					echo "<a href='AlbumView.php?album=$album'>
							<div class='card' style='width: 18rem; margin-right: 10px;'>
							<img class='card-img-top' src='Admin/Gallery/$img' alt='Card image cap'>
							<div class='card-body'>
							<h5 class='card-title'>$album</h5>
							</div>
						</a>
				  		</div>";
				}
			}

		?>
			</div>
			<!-- End row -->
			
		</div>
		<!-- End container -->
	</main>
	<!-- End main -->

<?php include "footer.php" ?>