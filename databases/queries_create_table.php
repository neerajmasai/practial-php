<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require('./connection.php');

    //build create query
    $sql = "CREATE TABLE Guests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    if(mysqli_query($connect_status, $sql)){
        echo "<h2> Table created. </h2>";
    }
    else{
        echo "<h2> Something went wrong. </h2>" . mysqli_error($connect_status);
    }

    //close connection
    mysqli_close(($connect_status));

    ?>
</body>

</html>