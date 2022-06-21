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

        /* arrays can be cloned directly using equal to */
        
        $a = array(1, 2, "apple"); // array can have mixed datatype
        $b = $a; // cloning

        $b[2] = 3;
        
        echo "<h1> Array A -> </h1>";
        foreach($a as $num){
            echo $num;
        }

        echo "<h1> Array B -> </h1>";
        foreach($b as $num){
            echo $num;
        }

        /* associative arrays */

        $assoc_arr = array(
            "neeraj" => "javascript",
            "pratik" => "java",
            "navnath" => "php",
            "aniket" => "java",
            "supriya" => "HTML/CSS"
        );

        foreach($assoc_arr as $key => $val){
            echo "\n" . $key . " -> " . $val;
        }

        /* multidimensional arrays */

        $pokedex = array(
            array("Charlizard", "Fire type"),
            array("Psyduck", "Psychedelic type"),
            array("Pikachu", "Electric type"),
            array("Snorlex", "Unknown")
        );

        foreach($pokedex as $row){

            foreach($row as $val){

                echo $val;
                
            }
        };
    ?>
</body>
</html>