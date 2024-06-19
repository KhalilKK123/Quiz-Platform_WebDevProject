<!DOCTYPE html>
<html>

<?php 
include("secureSesh.php");
if(!isset($_SESSION["validateUser"])){
  header("location: loginPage.php");
  exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Pixelify Sans' rel='stylesheet'>
    <link rel="stylesheet" href="homePage.css" />
    <title>KMH</title>
    <style>
    #a {
        position: absolute;
        right: 60px;
        top: 35px;
        margin: 10px;
        /* Adjust this value as needed */
        font-size: 20px;
        /* Adjust font size as needed */
    }
    </style>
</head>

<body>
    <form action="homePageSesh.php" method="POST">
        <div class="splash">
            <h1 class="splash-text">K &nbsp &nbsp &nbsp M &nbsp &nbsp &nbsp H </h1>
            <h4 class="splash-text2">Loading up quizzes</h4>
        </div>

        <div class="navbar">
            <ul>
                <li id="khalil">
                    <h1>&nbsp K &nbsp &nbsp &nbsp</h1>
                </li>
                <li id="mohammad">
                    <h1>M&nbsp &nbsp &nbsp</h1>
                </li>
                <li id="hamza">
                    <h1>H</h1>
                </li>
            </ul>
            <span id="a"> <?php echo "welcome ".$_SESSION["username"]."!";?> </span>
        </div>

        <div class="box" id="box1">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <h2> HTML <>
                    </h2>
                </div>
                <div class="flip-box-back">
                    <h2 class="back">This quiz includes 10 random questions revolving around HTML.
                        <br>
                        <a href="optionsPage.php"><button class="btn" name="quiz" value="html"> Test the
                                waters</button></a>
                        </span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="box" id="box2">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <h2 id="css">CSS { }</h2>
                </div>
                <div class="flip-box-back">
                    <h2 class="back">This one is about CSS.
                        <br>
                        <a href="optionsPage.php"><button class="btn" name="quiz" value="css">Goodluck</button></a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="box" id="box3">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <h2>JS</h2>
                </div>
                <div class="flip-box-back">
                    <h2 class="back">This is javascript.
                        <br>
                        <a href="optionsPage.php"><button class="btn" name="quiz" value="js"> Goodluck?</button></a>
                    </h2>
                </div>
            </div>
        </div>

        <div class="box" id="box4">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <h2>PHP < / ?</h2>
                </div>
                <div class="flip-box-back">
                    <h2 class="back">...php.
                        <br>
                        <a href="optionsPage.php"><button class="btn" name="quiz" value="php"> Brave
                                enough?</button></a>
                        </span>
                    </h2>
                </div>
            </div>
        </div>

        <div class='light x1'></div>
        <div class='light x2'></div>
        <div class='light x3'></div>
        <div class='light x4'></div>
        <div class='light x5'></div>
        <div class='light x6'></div>
        <div class='light x7'></div>
        <div class='light x8'></div>
        <div class='light x9'></div>
        <script src="homePage.js"></script>
    </form>

    <form method="GET">
        <button type="submit" name="logout">Sign Out</button>
    </form>

    <?php
  if (isset($_GET['logout'])) {
      // Unset all of the session variables
      $_SESSION = array();

      // Destroy the session
      session_destroy();

      // Redirect to the login page
      header("Location: loginPage.php");
      exit();
  }
  ?>
</body>

</html>