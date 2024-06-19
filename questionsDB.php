<?php

include("db.php");

include("secureSesh.php");

if (!isset($_SESSION["quiz"])) {
    header("location: homePage.php");
    exit();
}
if (!isset($_SESSION["diff"])) {
    header("location: optionsPage.php");
    exit();
}

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

$sql = "SELECT * FROM $quiz WHERE id = ? and Diff = ?;";
$stmt = $con->prepare($sql);
$stmt->bind_param("is", $id, $diff);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo $row["Question"] . '|' .
        $row["A1"] . '|' .
        $row["A2"] . '|' .
        $row["A3"] . '|' .
        $row["A4"];
} else {
    echo "No more entries.";
}

$con = null;
$stmt = null;
die();
