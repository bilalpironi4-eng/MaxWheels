<?php

session_start();

/* =========================================================
   DATABASE CONNECTION
========================================================= */

$host = "localhost";
$username = "root";
$password = "";
$database = "max_vehicle";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");


/* =========================================================
   LOGIN CHECK
========================================================= */

if (!isset($_SESSION["user_id"])) {

    header("Location: login.html");
    exit();

}


/* =========================================================
   ONLY POST REQUEST
========================================================= */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: index.php#vehicles");
    exit();

}


/* =========================================================
   GET DATA
========================================================= */

$user_id = $_SESSION["user_id"];

$service_name = trim($_POST["service_name"] ?? "");
$vehicle_name = trim($_POST["vehicle_name"] ?? "");
$booking_date = trim($_POST["booking_date"] ?? "");
$booking_time = trim($_POST["booking_time"] ?? "");
$address = trim($_POST["address"] ?? "");
$notes = trim($_POST["notes"] ?? "");

$pickup_required = isset($_POST["pickup_required"]) ? 1 : 0;


/* =========================================================
   VALIDATION
========================================================= */

if ($service_name === "") {
    die("Please select a service.");
}

if ($booking_date === "") {
    die("Please select booking date.");
}

if ($booking_time === "") {
    die("Please select booking time.");
}

if ($address === "") {
    die("Please enter your address.");
}


/* =========================================================
   INSERT BOOKING
========================================================= */

$stmt = $conn->prepare(
    "INSERT INTO bookings
    (
        user_id,
        service_name,
        vehicle_name,
        booking_date,
        booking_time,
        address,
        notes,
        pickup_required
    )
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
);

if (!$stmt) {
    die("Prepare Failed: " . $conn->error);
}


$stmt->bind_param(
    "issssssi",
    $user_id,
    $service_name,
    $vehicle_name,
    $booking_date,
    $booking_time,
    $address,
    $notes,
    $pickup_required
);


/* =========================================================
   SAVE
========================================================= */

if ($stmt->execute()) {

    $stmt->close();
    $conn->close();

    header("Location: index.php?booking=success#contact");
    exit();

} else {

    echo "Booking Failed: " . $stmt->error;

    $stmt->close();
    $conn->close();
}

?>