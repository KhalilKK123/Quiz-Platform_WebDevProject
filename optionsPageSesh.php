<?php

session_start();

$_SESSION["diff"] = $_POST["diff"];

$_SESSION["id"] = 1;

header("Location: questionsPage.php");
exit();
