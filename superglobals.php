<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <a href="superglobals_test.php?data=some data">Send some data to server by clicking here..</a>

    <?php

    /* Globals Array */

    $global_a = "Global Variable A";

    echo $GLOBALS['global_a'];

    /* Server Super Global */

    //uncomment below loop to print all Server details
    // foreach($_SERVER as $key => $val){
    //     echo $key . "          ->         " . $val . "</br>";
    // }

    /* Request Super Global */

    if($_SERVER['REQUEST_METHOD'] === "POST"){

        // collect value from input

        $form_field_name = $_REQUEST['fname'];
        
        echo "<h3>" . $form_field_name . "</h3>";
    };


    /* POST & GET Super Globals */
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){

        // collect value from input

        $form_field_name = $_POST['fname'];
        
        echo "<h3>" . $form_field_name . "</h3>";
    };


    ?>
</body>

</html>