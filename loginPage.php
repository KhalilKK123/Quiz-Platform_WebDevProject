<html>
<?php
include("secureSesh.php");
?>

<head>
    <style>
                body{
    text-align:center;
    background-color: rgb(29, 29, 29);
    margin:0;
    font-family: "Pixelify Sans";
}

.navbar {
  color: white;
  background-color: rgb(20, 20, 20);
  padding: 10px 0px;
  transition: 0.6s;
  margin-left: 20px;
  margin-right: 20px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 3px 3px 10px rgba(0,0,0,1),
  -1px -1px 6px rgba(255, 255, 255, 0.4);
}

.navbar:hover {
  transform: translate(0px, 10px);
}

.navbar ul {
  text-align: center;
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  font-family: "Pixelify Sans";
  border-radius: 20px;
  display: inline-flex;
}

.navbar li {
  margin: 0px 5px 0px 0px;
}
        
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 90px;
}

.container {
  position: relative;
  margin-bottom: 15px;
  margin-top: 15px;
}

.label {
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 15px;
  color: rgba(255, 255, 255, 0.7);
  pointer-events: none;
  transition: transform 0.3s, font-size 0.3s, color 0.3s;
}

.input {
  width: 200px;
  height: 45px;
  border: none;
  outline: none;
  padding: 0px 7px;
  border-radius: 6px;
  color: #fff;
  font-size: 15px;
  background-color: transparent;
  box-shadow: 3px 3px 10px rgba(0,0,0,1),
  -1px -1px 6px rgba(255, 255, 255, 0.4);
}

.input:focus {
  border: 2px solid transparent;
  color: #fff;
  box-shadow: 3px 3px 10px rgba(0,0,0,1),
  -1px -1px 6px rgba(255, 255, 255, 0.4),
  inset 3px 3px 10px rgba(0,0,0,1),
  inset -1px -1px 6px rgba(255, 255, 255, 0.4);
}

.container .input:valid ~ .label,
.container .input:focus ~ .label {
  transition: 0.3s;
  padding-left: 2px;
  transform: translateY(-35px);
}


.container .input:valid,
.container .input:focus {
  box-shadow: 3px 3px 10px rgba(0,0,0,1),
  -1px -1px 6px rgba(255, 255, 255, 0.4),
  inset 3px 3px 10px rgba(0,0,0,1),
  inset -1px -1px 6px rgba(255, 255, 255, 0.4);
}

a {text-decoration: none;
    color:white;}

.submit{font-family: "Pixelify Sans";
        background-color:transparent;
        color:white;    
        padding:20px 30px;
        transition:0.6s;
        cursor: pointer;
    }

    p{
        color:red;
    }
    </style>
<link href='https://fonts.googleapis.com/css?family=Pixelify Sans' rel='stylesheet'>
</head>
<body>
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
    </div>

    <form method="post" action="loginCheck.php">
    <div class="container">
            <input required="" type="text" class="input" name="Email" value="<?php echo isset($_SESSION['LoginEmail']) ? htmlspecialchars($_SESSION['LoginEmail']) : ''; ?>">
            <label class="label">Email</label>
            </div>
            <br>
    <div class="container">
            <input required="" type="password" class="input" name="password">
            <label class="label">Password</label>
            </div>
            <br>
            <div> <a href="signupPage.php"> Don't have an account?</a></div>
            <br>
            <input type="submit" class="submit" value="Log in">

    </form>
    <?php

    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION['errors'];

        echo "<br>";
        foreach ($errors as $error) {
            echo "<p>" . $error . "</p><br>";
        }
        unset($_SESSION["LoginEmail"]);
        unset($_SESSION["errors"]);
    }
    ?>
</body>

</html>