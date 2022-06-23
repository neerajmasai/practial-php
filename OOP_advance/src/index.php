<?php require './Address/class.address.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Advance</title>
</head>
<body>
    <h1>Defining a class</h1>
    <?php var_export(new Address) ?>

    <h1>Instantiating a class</h1>
    <?php $address = new Address; var_export($address); ?>

    <h1>Setting properties on an Object</h1>
    <?php 
        $address->street_address_1 = "Dukes Home 2, Palace Orchard Society";
        $address->street_address_2 = "NIBM Road";
        $address->city = "Pune";
        $address->_postal_code = 411060;
        $address->subdivision = "Maharastra";

        var_export($address);
    ?>

    <h1>Displaying properties</h1>
    <?php var_export($address->display()); ?>

    <h1>Testing Magic Methods __get & __set</h1>
    <?php
     unset($address->_postal_code);
     $address->_postal_code;
    ?>
    

</body>
</html>