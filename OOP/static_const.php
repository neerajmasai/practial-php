<?php 

class Cake{
    public static $calories = 500;
    public static function howManyCalories() : int{
        return static::$calories;
    }

    const SIZE_OF_CAKE = "LARGE";


}

var_dump(Cake::$calories);

var_dump(Cake::howManyCalories());

var_dump(Cake::SIZE_OF_CAKE);

?>