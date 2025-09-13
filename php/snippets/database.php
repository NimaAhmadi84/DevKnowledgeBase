<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// انجام عملیات دیتابیس...

// بستن اتصال
$conn->close();
?>
