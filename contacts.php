<?php

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

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php#contact");
    exit();
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "") {
    die("Please enter your name.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}

if ($subject === "") {
    die("Please enter subject.");
}

if ($message === "") {
    die("Please enter your message.");
}

$stmt = $conn->prepare(
    "INSERT INTO contacts
    (name, email, subject, message)
    VALUES (?, ?, ?, ?)"
);

if (!$stmt) {
    die("Prepare Failed: " . $conn->error);
}

$stmt->bind_param(
    "ssss",
    $name,
    $email,
    $subject,
    $message
);

if ($stmt->execute()) {

    $stmt->close();
    $conn->close();

    header("Location: index.php?contact=success#contact");
    exit();

} else {

    echo "Message Send Failed: " . $stmt->error;

    $stmt->close();
    $conn->close();
}

?>