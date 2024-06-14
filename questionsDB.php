<?php

include("db.php");

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

$sql = "SELECT * FROM css WHERE id = '$id'";
$result = mysqli_query($con, $sql);

if ($result) {
    if ($row = mysqli_fetch_assoc($result)) {
        echo $row["Question"] . '|' . $row["A1"] . '|' . $row["A2"] . '|' . $row["A3"] . '|' . $row["A4"];
    } else {
        echo "No more entries.";
    }
} else {
    echo "Query error: " . mysqli_error($con);
}