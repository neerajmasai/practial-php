<?php

class Person{

    private $name;
    private $age;
    private $languages;
    private $nationality;

    public function __construct($name, $age, $languages, $nationality)
    {
        $this->name = $name;
        $this->age = $age;
        $this->languages = $languages;
        $this->nationality = $nationality;
    }

    public function introduce()
    {
        $languages = join(",", $this->languages);
        return "Hi! My name is {$this->name}, I am {$this->age} years old. I can fluently speak {$languages}. I am a proud {$this->nationality}.";
    }

}


$neeraj = new Person("Neeraj", 23, array("English", "Hindi", "Marathi"), "Indian");

echo var_dump($neeraj);
echo $neeraj->introduce();
?>