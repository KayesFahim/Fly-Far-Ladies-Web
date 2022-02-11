<?php

    date_default_timezone_set('Asia/Dhaka');

    $servername = "localhost";
    $username = "flyfarer_flyfarladies";
    $password = "@Kayes70455";
    $dbname = "flyfarer_flyfarladies";
    
    // Create connection
    $conn_integration = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn_integration->connect_error) {
      die("Connection failed: " . $conn_integration->connect_error);
    }else{
        echo '';
  }
    
?>