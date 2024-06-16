<?php

include("db.php");

session_start();

$quiz = isset($_SESSION["quiz"]) ? $_SESSION["quiz"] : "css";

$diff = isset($_SESSION["diff"]) ? $_SESSION["diff"] : "Beginner";


switch ($diff) {
    case "Beginner":
        $id = isset($_GET['id']) ? intval($_GET['id']) : 1;
        break;
    case "Amateur":
        $id = isset($_GET["id"]) ? intval($_GET['id']) + 10 : 11;
        break;
    case "Expert":
        $id = isset($_GET["id"]) ? intval($_GET['id']) + 20 : 21;
        break;
}

$sql = "SELECT * FROM $quiz WHERE id = '$id' and Diff = '$diff';";
$result = mysqli_query($con, $sql);

if ($result) {
    if ($row = mysqli_fetch_assoc($result)) {
        echo $row["Question"]  . '|' .
            $row["A1"]  . '|' .
            $row["A2"]  . '|' .
            $row["A3"]  . '|' .
            $row["A4"];
    } else {
        echo "No more entries.";
    }
} else {
    echo "Query error: " . mysqli_error($con);
}
