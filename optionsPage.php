<!DOCTYPE html>
<?php
include("secureSesh.php");
if (!isset($_SESSION["validateUser"])) {
  header("location: loginPage.php");
  exit();
}
?>


<html>

<head>
  <title>KMH</title>
  <link rel="stylesheet" href="homePage.css" />
  <link rel="stylesheet" href="optionsPage.css" />
  <link href="https://fonts.googleapis.com/css?family=Pixelify+Sans" rel="stylesheet" />

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
  <div class="navbar">
  <form method="GET"> 
        <button id="submittt" class="submitt" name="logout">Sign Out</button>
    </form>
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
    <span id="a"> <?php echo $_SESSION["username"]; ?> </span>
  </div>

  <div class="splash">
    <h1 class="splash-text">K &nbsp &nbsp &nbsp M &nbsp &nbsp &nbsp H</h1>
    <h4 class="splash-text2">Loading up quizzes</h4>
  </div>
  <form action="optionsPageSesh.php" method="POST" class="form-container">
    <div class="radio-container">
      <label>
        <input type="radio" name="diff" class="radio-input" value="Beginner" checked />
        <span class="btn" id="btn3">Beginner</span>
      </label>

      <label>
        <input type="radio" name="diff" class="radio-input" value="Amateur" />
        <span class="btn" id="btn2">Amateur</span>
      </label>
      <label>
        <input type="radio" name="diff" class="radio-input" value="Expert" />
        <span class="btn" id="btn1">Expert</span>
      </label>
    </div>

    <button class="btn2" type="submit">Ready?</button>
  </form>
  <script src="homePage.js"></script>

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
