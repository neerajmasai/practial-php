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

class Weapon {
    private $weapon_type;

    public function __construct(string $weapon_type)
    {
        $this->weapon_type = $weapon_type;
    }

    public function get_weapon_type(){
        return $this->weapon_type;
    }
}

class Pilot {
    private $pilot_name;

    public function __construct(string $pilot_name)
    {
        $this->pilot_name = $pilot_name; 
    }

    public function get_pilot_name(){
        return $this->pilot_name;
    }
}


interface Evangelions{

    public function connect_to_pilot();

    public function initiate_evangelion();

    public function load_weapons(array $weapons = []);

    public function fire_weapon(Weapon $weapon);

    public function eject_pilot();

}

class Unit_1 implements Evangelions{

    private $pilot;

    private $weapons_stock=[];

    public function __construct(Pilot $pilot)
    {
        $this->pilot = $pilot;
    }
    public function connect_to_pilot() : void{
        $pilot_name = $this->pilot->get_pilot_name();
        echo "Pilot connected: {$pilot_name}.";
    }

    public function initiate_evangelion() : void{
        echo "Initiated sequence.";
    }

    public function load_weapons(array $weapons = []){
        foreach($weapons as $weapon){
            $name = $weapon->get_weapon_type();
            echo "Loaded {$name}";
            array_push($this->weapons_stock, $weapon);
        }
    }

    public function fire_weapon(Weapon $weapon){
        $weapon_name = $weapon->get_weapon_type();
        echo "Firing {$weapon_name}";
    }

    public function eject_pilot(){
        $pilot_name = $this->pilot->get_pilot_name();
        echo "Ejected pilot {$pilot_name}";
    }

}
?>

<?php

$pilot1 = new Pilot("Shinji Ikari");

$Unit1 = new Unit_1($pilot1);

$weapon1 = new Weapon("Front Artillery Gun");

$weapon2 = new Weapon("Heavy Missiles");

$Unit1->connect_to_pilot();

$Unit1->initiate_evangelion();

$Unit1->load_weapons(array($weapon1, $weapon2));

$Unit1->fire_weapon($weapon1);

$Unit1->eject_pilot();
?>
</body>
</html>


