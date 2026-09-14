<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "vehicle_service_db";

$con = mysqli_connect($host, $username, $password, $database);

if ($con) {

    mysqli_set_charset($con, "utf8mb4");
echo "PHP is working!";
    echo "PHP is working!<br>";
    echo "Database connected successfully!";

} else {

    die("Database connection failed: " . mysqli_connect_error());



}

?>