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
    $sql = "SELECT * from guests";

    $data = mysqli_query($connect_status, $sql);

    foreach($data as $row){
        // echo var_dump($row);
        foreach($row as $val){
            echo "<h4>$val</h4>";
        }
        echo "</br>";
    }

    //close connection
    mysqli_close(($connect_status));

    ?>
</body>

</html>