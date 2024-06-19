<?php

include("secureSesh.php");


$_SESSION["quiz"] = $_POST["quiz"];

header("Location: optionsPage.php");
exit();
