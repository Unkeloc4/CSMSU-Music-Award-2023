<?php

    $username = "singto";
    $password = "abc123";
    $host = "localhost";
    $dbname = "music_brand";


    $conn = new mysqli($host , $username , $password , $dbname);

    if($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }
?>