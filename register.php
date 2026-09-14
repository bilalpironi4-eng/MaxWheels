<?php

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
   ONLY POST REQUEST
========================================================= */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: register.html");
    exit();

}


/* =========================================================
   GET FORM DATA
========================================================= */

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");

$user_password = $_POST["password"] ?? "";
$confirm_password = $_POST["confirm_password"] ?? "";


/* =========================================================
   VALIDATION
========================================================= */

if ($name === "") {
    die("Please enter your name.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}

if ($phone === "") {
    die("Please enter your phone number.");
}

if (strlen($user_password) < 6) {
    die("Password must be at least 6 characters.");
}

if ($user_password !== $confirm_password) {
    die("Passwords do not match.");
}

if (!isset($_POST["terms"])) {
    die("Please accept Terms & Conditions.");
}


/* =========================================================
   CHECK EMAIL
========================================================= */

$check = $conn->prepare(
    "SELECT id
     FROM users
     WHERE email = ?"
);

if (!$check) {
    die("Prepare Failed: " . $conn->error);
}

$check->bind_param("s", $email);

$check->execute();

$check->store_result();

if ($check->num_rows > 0) {

    $check->close();
    $conn->close();

    die("This email is already registered.");
}

$check->close();


/* =========================================================
   HASH PASSWORD
========================================================= */

$hashed_password = password_hash(
    $user_password,
    PASSWORD_DEFAULT
);


/* =========================================================
   INSERT USER
========================================================= */

$sql = "
    INSERT INTO users
    (name, email, phone, password)
    VALUES (?, ?, ?, ?)
";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare Failed: " . $conn->error);
}

$stmt->bind_param(
    "ssss",
    $name,
    $email,
    $phone,
    $hashed_password
);


/* =========================================================
   SAVE USER
========================================================= */

if ($stmt->execute()) {

    $stmt->close();
    $conn->close();

    header("Location: login.html?registered=success");
    exit();

} else {

    echo "Registration Failed: " . $stmt->error;

    $stmt->close();
    $conn->close();
}

?>