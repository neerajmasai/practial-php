<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sessions - Deletion</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $_POST["username"];
            $password = $_POST["password"];

            //check against dummy credentials
            if($username === "neeraj" && $password === "galaxy"){
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;

                //redirect to dashboard
                header("Location: deletion_dashboard.php");
            }
            else{
                echo "<h6 style='color: red'>Invalid Credentials</h6>";
            }


        }

    ?>
</body>
</html>