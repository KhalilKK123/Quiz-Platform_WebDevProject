<?php
include("db.php");
include("secureSesh.php"); // Assuming secureSesh.php starts a session securely
$errorHandler = [];

if (isset($_POST["Email"]) && isset($_POST["password"])) {
    $email = $_POST["Email"];
    $password = $_POST["password"];
} else {
    $errorHandler["inputEmpty"] = "Fill all the inputs!";
}

if (isInputEmpty($email, $password)) {
    $errorHandler["inputEmpty"] = "Fill all the inputs!";
}

if (!empty($email) && isEmailInvalid($email)) {
    $errorHandler["emailInvalid"] = "Invalid email used!";
}

// if(!isUserRegistered($email, $con)) {
//   //  $errorHandler["userRegistered"] = "3Invalid email or password!";
// }

if ($errorHandler) {
    $_SESSION['errors'] = $errorHandler;
    $_SESSION["LoginEmail"] = $email;
    header("location:loginPage.php");
    exit();
} else {
    $sql = "SELECT username ,password FROM accounts WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedHashedPassword = $row['password'];
        $username = $row['username'];

        if (password_verify($password, $storedHashedPassword)) {
            // echo "<script>alert('Login successful');</script>";
            
            $_SESSION["validateUser"] = "true";
            $_SESSION["username"] = $username;
            header("location:homePage.php");
        } else {
            $errorHandler["invalidCredentials"] = "Invalid email or password!";
            $_SESSION["LoginEmail"] = $email;
            $_SESSION['errors'] = $errorHandler;
            header("location:loginPage.php");
            exit();
        }
    } else {
        $errorHandler["invalidCredentials"] = "Invalid email or password!";
        $_SESSION["LoginEmail"] = $email;
        $_SESSION['errors'] = $errorHandler;
        header("location:loginPage.php");
        exit();
    }
}

$con  = null;
$stmt = null;
die();

function isUserRegistered($email, $con) {
    $sql = "SELECT * FROM accounts WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt = null; 
    return $result->num_rows > 0;
}

function isInputEmpty($email, $password) {
    return empty($email) || empty($password);
}

function isEmailInvalid($email) {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>