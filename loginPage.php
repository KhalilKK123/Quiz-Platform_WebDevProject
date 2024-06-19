<html>
<?php
include("secureSesh.php");
?>

<head>
    <style>
        fieldset {
            text-align: center;
            align-items: center;
        }
    </style>
</head>

<body>


    <form method="post" action="loginCheck.php">
        <fieldset>
            <legend> login</legend>

            <input type="text" placeholder="Email" name="Email" value="<?php echo isset($_SESSION['LoginEmail']) ? htmlspecialchars($_SESSION['LoginEmail']) : ''; ?>"><br>
            <input type="password" placeholder="Password" name="password"><br>
            <div> <a href="signupPage.php"> don't have an account? click here</a></div>
            <input type="submit" value="submit">

        </fieldset>
    </form>
    <?php

    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION['errors'];

        echo "<br>";
        foreach ($errors as $error) {
            echo "" . $error . "<br>";
        }
        unset($_SESSION["LoginEmail"]);
        unset($_SESSION["errors"]);
    }
    ?>
</body>

</html>