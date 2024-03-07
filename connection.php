<?php
$servername = "fdb1031.biz.nf";
$username = "4436081_app";
$password = "Malith@#123";
$dbname = "4436081_app"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>