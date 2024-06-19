<?php
include("secureSesh.php");
if (!isset($_SESSION["validateUser"])) {
  header("location: loginPage.php");
  exit();
}
if (!isset($_SESSION["quiz"])) {
  header("location:homePage.php");
  exit();
}
if (!isset($_SESSION["diff"])) {
  header("location:optionsPage.php");
  exit();
}

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
    <head>
        <title>KMH</title>
        <link rel='stylesheet' href='homePage.css' />
        <link rel='stylesheet' href='optionsPage.css' />
        <link href='https://fonts.googleapis.com/css?family=Pixelify Sans' rel='stylesheet'>
        <style>
            body{margin: 0;
  height: 100vh;
  font-weight: 100;
  background: radial-gradient(#1b1b1b, #000000);
  -webkit-overflow-y: hidden;
  -moz-overflow-y: hidden;
  -o-overflow-y: hidden;
  overflow-y: hidden;
  -webkit-animation: fadeIn 1 1s ease-out;
  -moz-animation: fadeIn 1 1s ease-out;
  -o-animation: fadeIn 1 1s ease-out;
  animation: fadeIn 1 1s ease-out;}

            .btn2{font-family: 'Pixelify Sans';}

            .btn3 {
  font-size: 2rem;
  border: none;
  outline: none;
  border-radius: 0.4rem;
  text-transform: uppercase;
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
  font-weight: 700;
  transition: 0.6s;
  margin: 50px 900px 0px 900px;
  text-decoration: none;
  font-family: 'Pixelify Sans';
  background-color: black;
  text-align: center;
  opacity: 1;
  display: block;
}

  table,th,td{
  color:white;
  margin:0 auto;
  font-size:20px;
  font-family: 'Pixelify Sans';
  border-collapse:seperate;
  border-spacing:70px 5px;
  }

    th,td{border:none;
            }
  
  tr{border:none;}
  
  .thead{
        background-color:black;
        }


        </style>
    </head>
    <body>
    <div class='navbar'>
      <ul>
        <li id='khalil'>
          <h1>&nbsp K &nbsp &nbsp &nbsp</h1>
        </li>
        <li id='mohammad'>
          <h1>M&nbsp &nbsp &nbsp</h1>
        </li>
        <li id='hamza'>
          <h1>H</h1>
        </li>
      </ul>
    </div>
    <br><br>
        <table class='table'>
            <tr>
                <th class='thead'>#</th>
                <th class='thead'>Question</th>
                <th class='thead'>Correct Answer</th>
                <th class='thead'>Selected Answer</th>
            </tr>";

foreach ($finalArray as $row) {
  echo "<tr><td>" . htmlspecialchars($row[0]) .
    "</td><td>" . htmlspecialchars($row[1]) .
    "</td><td>" . htmlspecialchars($row[2]) .
    "</td><td>" . htmlspecialchars($row[3]) .
    "</td></tr>";
}


echo "</table><span class='btn3'>" . $score .

  "/10 </span><br><a href='homePage.php'><br><br><br><br><button class='btn2'>Go Home</button></a>

    
</body>

</html>";

unset($_SESSION["quiz"]);
unset($_SESSION["diff"]);
