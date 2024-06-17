<?php

$encodedArray = $_GET["reviewSheet"];

$decodedArray = urldecode($encodedArray);

$explodedArray = explode("^", $decodedArray);

$finalArray = array();

foreach ($explodedArray as $row) {
    $finalArray[] = explode("|", $row);
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


echo "</table>
<a href='homePage.html'><button>Go Home</button></a>

</body>

</html>";