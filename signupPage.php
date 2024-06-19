<?php
include("secureSesh.php");
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        fieldset {
            text-align: center;
            align-items: center;
        }

        div {
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="post" action="signupCheck.php">
        <fieldset>
            <legend>Sign Up</legend>

            <input type="text" placeholder="Email" name="Email" value="<?php echo isset($_SESSION['SignUpEmail']) ? htmlspecialchars($_SESSION['SignUpEmail']) : ''; ?>"><br>
            <input type="text" placeholder="Username" name="username" value="<?php echo isset($_SESSION['SignUpUserName']) ? htmlspecialchars($_SESSION['SignUpUserName']) : ''; ?>"><br>
            <input type="password" placeholder="Password" name="password"><br>
            <div><a href="loginPage.php">Have an account? Click here</a></div>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if (isset($_SESSION['errors'])) {
        $errors = $_SESSION['errors'];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<div style='color:red;'>$error</div><br>";
        }
        unset($_SESSION['errors']);
        unset($_SESSION['signUpUserName']);
        unset($_SESSION['signUpEmail']);
    }
    ?>
</body>

</html>