<?php include "header.php";


?>

			
                    
                    
                        <section class="parallax-window" data-parallax="scroll" data-image-src="img/banner.jpg" data-natural-width="1400" data-natural-height="470">
                            <div class="parallax-content-1">
                                <div class="animated fadeInDown">
                                    <h1> Stock Photos</h1>                                  
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
                                   
                                </div>
                                <hr>
                                <?php
                                $sql = "SELECT * FROM stockphoto ORDER BY id DESC";
                                $result = $conn->query($sql);
                    
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {													  
                                       
                                        $category = $row["category"];
                                        echo "  <a class='btn btn-primary' href='StockPhoto.php?search=$category' role='button'>$category</a>";

                                    }
                                }
                                
                                ?>
                              
                               
                                <hr>
                                <div class="row magnific-gallery add_bottom_60">
				
                                <?php

                                if(array_key_exists('search',$_GET)){
                                    $search = $_GET['search'];
                                    $sql = "SELECT * FROM stockphoto WHERE category LIKE '$search%'";
                                    $result = $conn->query($sql);
                        
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {													  
                                            $img = $row["link"];
                                            $album = $row["category"];
                                            $title = $row["title"];
                                                                
                                            echo "<div class='col-md-3 col-sm-6'>
                                                    <div class='img_wrapper_gallery'>
                                                        <div class='img_container_gallery'>
                                                            <a href='Admin/StockPhoto/$img' title='$album' data-effect='mfp-zoom-in'>
                                                            <img src='Admin/StockPhoto/$img' alt='$title' class='img-fluid'>
                                                                <i class='icon-resize-full-2'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>";
                                        }
                                    }

                                }else{
                   
                                $sql = "SELECT * FROM stockphoto ORDER BY id DESC";
                                $result = $conn->query($sql);
                    
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {													  
                                        $img = $row["link"];
                                        $category = $row["category"];
                                        $title = $row["title"];
                                                               
                                        echo "<div class='col-md-3 col-sm-6'>
                                                <div class='img_wrapper_gallery'>
                                                    <div class='img_container_gallery'>
                                                        <a href='Admin/StockPhoto/$img' title='$category' data-effect='mfp-zoom-in'>
                                                        <img src='Admin/StockPhoto/$img' alt='$title' class='img-fluid'>
                                                            <i class='icon-resize-full-2'></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>";
                                    }
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