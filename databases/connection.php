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
        echo "<h1> Connecting to MySQL Database </h1>";

        //setting up credentials
        $user = "neeraj";
        $pass = "12345678";
        $db = "sample_db";

        //connecting to and selecting a database
        $connect_status = mysqli_connect('localhost', $user, $pass) or die("Could not connect to Database.");

        mysqli_select_db($connect_status, $db) or die("Could not select database.");

        echo "<h2>Connected successfully!</h2>";
    ?>
</body>
</html>