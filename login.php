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


/* =========================================================
   CHECK DATABASE CONNECTION
========================================================= */

if ($conn->connect_error) {

    die("Database Connection Failed: " . $conn->connect_error);

}

$conn->set_charset("utf8mb4");


/* =========================================================
   ONLY POST REQUEST
========================================================= */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: login.html");
    exit();

}


/* =========================================================
   GET FORM DATA
========================================================= */

$email = trim($_POST["email"] ?? "");
$user_password = $_POST["password"] ?? "";


/* =========================================================
   VALIDATION
========================================================= */

if ($email === "") {

    die("Please enter your email.");

}

if ($user_password === "") {

    die("Please enter your password.");

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    die("Please enter a valid email address.");

}


/* =========================================================
   FIND USER
========================================================= */

$stmt = $conn->prepare(
    "SELECT id, name, email, phone, password
     FROM users
     WHERE email = ?"
);

if (!$stmt) {

    die("Prepare Failed: " . $conn->error);

}

$stmt->bind_param("s", $email);

$stmt->execute();

$result = $stmt->get_result();


/* =========================================================
   CHECK USER
========================================================= */

if ($result->num_rows === 1) {

    $user = $result->fetch_assoc();


    /* =====================================================
       VERIFY PASSWORD
    ===================================================== */

    if (password_verify($user_password, $user["password"])) {


        /* =================================================
           CREATE SESSION
        ================================================= */

        $_SESSION["user_id"] = $user["id"];

        $_SESSION["user_name"] = $user["name"];

        $_SESSION["user_email"] = $user["email"];

        $_SESSION["user_phone"] = $user["phone"];


        /* =================================================
           CLOSE CONNECTION
        ================================================= */

        $stmt->close();

        $conn->close();


        /* =================================================
           LOGIN SUCCESS
        ================================================= */

        header("Location: index.php");

        exit();


    } else {

        $stmt->close();

        $conn->close();

        die("Incorrect password.");

    }


} else {

    $stmt->close();

    $conn->close();

    die("Email not registered.");

}

?>