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
    <h1>Dashboard</h1>
    <?php echo var_dump($_SESSION); ?>

    <h2>Your Username: <?php if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
    };
    ?></h2>
    <h2>Your Password: <?php if(isset($_SESSION['username'])){
        echo $_SESSION['password'];
    };
    ?></h2>


    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="submit" value="Logout" />
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] === "POST"){

            //Destroy Session to Logout user
            session_destroy();

            // after logout

            echo "<h4>SESSION DESTROYED. REFRESH PAGE.</h4>";
        }

    ?>
</body>

</html>