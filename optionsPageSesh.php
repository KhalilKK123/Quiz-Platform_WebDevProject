<?php

session_start();

$_SESSION["diff"] = $_POST["diff"];

header("Location: questionsPage.php");
exit();