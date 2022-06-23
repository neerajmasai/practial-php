<?php
    namespace LearningPHP;

    class Department{
        private $name;
        private $capacity;
        private $staff;
        public function __construct($name)
        {
            $this->name = $name;
            $this->capacity = 0;
            $this->staff = array();

        }

        public function add_staff(Employee $emp){
            array_push($this->staff, $emp);
            $this->capacity++;
        }

        public function get_capacity(){
            return $this->capacity;
        }

        public function get_staff(){
            return var_dump($this->staff);
        }

    }

?>