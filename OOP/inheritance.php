<?php

    class Car{

        protected $type;
        protected $launch_year;
        protected $color;
        protected $no_of_seats;

        protected function __construct($type, $launch_year, $color, $no_of_seats)
        {
            $this->type = $type;
            $this->launch_year = $launch_year;
            $this->color = $color;
            $this->no_of_seats = $no_of_seats;
        }
    }

    class BMW extends Car{
        
        private $series;
        private $class;

        public function __construct($type, $launch_year, $color, $no_of_seats, $series, $class)
        {
            $this->type = $type;
            $this->launch_year = $launch_year;
            $this->color = $color;
            $this->no_of_seats = $no_of_seats;
            $this->series = $series;
            $this->class = $class;
        }

        public function get_specifications(){
            return "TYPE: {$this->type} <br> LAUNCH DATE: {$this->launch_year} <br> COLOR: {$this->color} <br> SEATS: {$this->no_of_seats} <br> SERIES: {$this->series} <br> CLASS: {$this->class}";
        }
    }

$my_car = new BMW("SUV", "2021", "Matt Black", 4, "7", "Q");

echo $my_car->get_specifications();

?>
