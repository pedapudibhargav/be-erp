<?php
    ini_set('memory_limit','-1');
    $servername = "localhost:8889";
    $username = "root";
    $password = "admin";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body);
    print_r($_POST);
    echo "$data";
    echo "response2";
?>