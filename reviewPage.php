<?php

$encodedArray = $_GET["reviewSheet"];

$decodedArray = urldecode(base64_decode($encodedArray));

$explodedArray = explode("^", $decodedArray);

$finalArray = array();
$score = 0;


foreach ($explodedArray as $row) {
    $finalArray[] = explode("|", $row);
}


for ($i = 0; $i < count($finalArray); $i++) {
    if ($finalArray[$i][2] == $finalArray[$i][3]) {
        $score++;
    }
}





echo "<html>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>Question</th>
                <th>Correct Answer</th>
                <th>Selected Answer</th>
            </tr>";

foreach ($finalArray as $row) {
    echo "<tr><td>" . htmlspecialchars($row[0]) .
        "</td><td>" . htmlspecialchars($row[1]) .
        "</td><td>" . htmlspecialchars($row[2]) .
        "</td><td>" . htmlspecialchars($row[3]) .
        "</td></tr>";
}


echo "</table><br>" . $score .

    "/10 <br><a href='homePage.html'><button>Go Home</button></a>

</body>

</html>";