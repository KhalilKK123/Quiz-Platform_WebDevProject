<?php
include("db.php");
include("secureSesh.php"); // Assuming secureSesh.php starts a session securely
$errorHandler = [];

if (isset($_POST["Email"]) && isset($_POST["username"]) && isset($_POST["password"])) {
    $email = trim($_POST["Email"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
} else {
    $errorHandler["inputEmpty"] = "Fill all the inputs!";
    // $_SESSION['errors'] = $errorHandler;
    // header("location:signupPage.php");
    // exit();
}

if (isInputEmpty($email, $username, $password)) {
    $errorHandler["inputEmpty"] = "Fill all the inputs!";
}

if (!empty($email) && isEmailInvalid($email)) {
    $errorHandler["emailInvalid"] = "Invalid email used!";
}

if (isEmailRegistered($con, $email)) {
    $errorHandler["emailRegistered"] = "Email already registered!";
}

if ($errorHandler) {
    $_SESSION['errors'] = $errorHandler;
    $_SESSION['SignUpUserName'] = $username;
    $_SESSION['SignUpEmail'] = $email;
    header("location:signupPage.php");
    exit();
} else {
    $sql = "INSERT INTO `accounts` (`email`, `username`, `password`) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);

    $options = ['cost' => 12];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bind_param("sss", $email, $username, $hashedPassword);
    if ($stmt->execute()) {
        header("location: loginPage.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $con = null;
    $stmt = null;
    die();
}

function isInputEmpty($email, $username, $password)
{
    return empty($email) || empty($username) || empty($password);
}

function isEmailInvalid($email)
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isEmailRegistered($con, $email)
{
    $sql = "SELECT email FROM accounts WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt = null;
    return $result->num_rows > 0;
}
