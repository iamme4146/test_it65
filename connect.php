<?php
    $servername = "localhost";
    $username = "it65309010023";
    $password = "fluk4146";
    $dbname = "it65309010023";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }