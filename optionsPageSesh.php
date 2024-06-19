<?php

include("secureSesh.php");

if (!isset($_SESSION["validateUser"])) {
    header("location: loginPage.php");
    exit();
}

$_SESSION["diff"] = $_POST["diff"];


header("Location: questionsPage.php");
exit();
