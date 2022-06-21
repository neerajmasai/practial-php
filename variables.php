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
        $test = "Hello World!";

        echo "<h1>" . "Hey, " . $test . "</h1>";

        function global_test(){
            global $test;

            echo "<h2>" . "Hello from inside a function, " . $test . "</h2>";
        }

        global_test();

        function static_test(){
            static $counter = 0;
            
            $counter++;

            echo $counter;

        }

        static_test();
        static_test();
        static_test();
    ?>
</body>
</html>