<?php
    require('./src/Department.php');
    require('./src/Employee.php');

    $emp1 = new Employee("John Doe");
    $emp2 = new Employee("Neeraj Malwal");

    $cs_dept = new Department("Computer Science", 20);

    $cs_dept->add_staff($emp1);
    $cs_dept->add_staff($emp2);

    echo $cs_dept->get_capacity();
    echo $cs_dept->get_staff();
?>