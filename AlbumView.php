<?php include "header.php";
$albumName= $_GET["album"];

?>

			
                    
                    
                        <section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="470">
                            <div class="parallax-content-1">
                                <div class="animated fadeInDown">
                                    <h1><?php echo $albumName ?></h1>
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
                                <div class="row magnific-gallery add_bottom_60">
				
                                <?php

                                
                    
                                $sql = "SELECT * FROM gallery WHERE album LIKE '$albumName%'";
                                $result = $conn->query($sql);
                    
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {													  
                                        $img = $row["url"];
                                        $album = $row["album"];
                                        $title = $row["title"];
                                                               
                                        echo "<div class='col-md-3 col-sm-6'>
                                                <div class='img_wrapper_gallery'>
                                                    <div class='img_container_gallery'>
                                                        <a href='Admin/Gallery/$img' title='$album' data-effect='mfp-zoom-in'>
                                                        <img src='Admin/Gallery/$img' alt='$title' class='img-fluid'>
                                                            <i class='icon-resize-full-2'></i>
                                                        </a>
                                                    </div>
                                                </div>
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