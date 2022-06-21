<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="fname" id="fname">
    <input type="text" name="lname" id="lname">
    <input type="email" name="email" id="email">
    <input type="submit" value="Save">
</form>
    <?php
        require('./connection.php');

        //get form values
        if($_SERVER['REQUEST_METHOD'] === "POST"){

            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $email = $_POST['email'];

            // echo "My name is {$first_name} {$last_name} and my email is {$email}";

            //build insert query
            $sql = "INSERT INTO guests (firstname, lastname, email) VALUES ('{$first_name}', '{$last_name}', '{$email}');";
    
            if(mysqli_query($connect_status, $sql)){
                echo "<h2> Saved Successfully! </h2>";
            }
            else{
                echo "<h2> Save Unsuccessful!" . mysqli_error($connect_status);
            }
    
            //close connection
            mysqli_close($connect_status);

        }
        

    ?>
</body>
</html>