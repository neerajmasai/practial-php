<?php
    require('./vendor/autoload.php');

    $emp1 = new LearningPHP\Employee("John Doe");
    $emp2 = new LearningPHP\Employee("Neeraj Malwal");

    $cs_dept = new LearningPHP\Department("Computer Science", 20);

    $cs_dept->add_staff($emp1);
    $cs_dept->add_staff($emp2);

    echo $cs_dept->get_capacity();
    echo $cs_dept->get_staff();
?>