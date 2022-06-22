<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A simple cookie example</h1>
    <form action="#" method="post">
        <input type="submit" value="Clear All Cookies" />
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            setcookie('check', "", time()-3600);
        }

        if(isset($_COOKIE['check'])){
            echo "<h1>You already visited site!</h1>";
        }
        else{
            
            echo "<h1>You are visiting for the first time!</h1>";

            // set a cookie
            setcookie("check", TRUE, time() + (8640 * 30));

        }
    ?>
</body>
</html>