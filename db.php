<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "contact_manager";
try {
    $conn = new mysqli($host,$username,$password,$dbname);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if ($conn->connect_error) {
        throw new Exception("Database connection failed ".mysqli_connect_error());
    }
    echo "Connected successfully";
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}