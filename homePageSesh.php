<?php

session_start();

$_SESSION["quiz"] = $_POST["quiz"];

header("Location: optionsPage.html");
exit();