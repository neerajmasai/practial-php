<?php

abstract class Cake{

    protected $name;
    protected $flavour;
    protected $is_eggless;
    protected $calories;
    protected $size;

    protected function __construct($name, $flavour, $is_eggless = FALSE, $calories, $size = "Small")
    {
        $this->name = $name;
        $this->flavour = $flavour;
        $this->is_eggless = $is_eggless;
        $this->calories = $calories;
        $this->size = $size;
    }

    abstract protected function order() : string;
}

class Pastry {

    private $with_cream;
    private $with_cherry;

    public function __construct($name, $flavour, $is_eggless = FALSE, $calories, $size = "Small", $with_cream = FALSE, $with_cherry = False)
    {
        $this->name = $name;
        $this->flavour = $flavour;
        $this->is_eggless = $is_eggless;
        $this->calories = $calories;
        $this->size = $size;
        $this->with_cream = $with_cream;
        $this->with_cherry = $with_cherry;        
    }

    public function order() : string {
        $has_eggs = "Eggless";
        $has_cream = "Without Cream";
        $has_cherry = "Without Cherry";
        if(!$this->is_eggless){
            $has_eggs = "Includes Egg";
        }
        if($this->with_cherry){
            $has_cherry = "With Cream";
        }
        if($this->with_cream){
            $has_cream = "With Cherry";
        }

        $order_details = "Your Pastry is on its way!";

        $order_details .= "<br> Invoice <br>";

        $order_details .= "<br> Name: {$this->name} <br>";

        $order_details .= "<br> Flavour: {$this->flavour} <br>";

        $order_details .= "<br> Eggs? : {$has_eggs} <br>";

        $order_details .= "<br> Cherry? : {$has_cherry} <br>";

        $order_details .= "<br> Cream?: {$has_cream} <br>";

        $order_details .= "<br> Size: {$this->size} <br>";

        return $order_details;
    }

    public function nutritional_value() : int {
        return $this->calories;
    }

}


$birthday_cake = new Pastry("Hazelnut Choco Pastry", "Chocolate", TRUE, 500, "Medium");

echo $birthday_cake->order();

?>
