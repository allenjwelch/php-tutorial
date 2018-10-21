<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    function MoveWheels(){

		// echo "Move Wheels";

      $this->wheels = 10;


    }


    function CreateDoors(){

      $this->doors = 6;


    }

}

$bmw = new Car();
$truck = new Car();


echo "wheels: " . $bmw->wheels . "<br>";
$bmw->MoveWheels();

echo "wheels after MoveWheels(): " . $bmw->wheels . "<br>";

echo "truck wheels (assigned at call): " . $truck->wheels = 14 . "<br>";

echo "doors: " . $bmw->doors . "<br>";
$truck->CreateDoors();
echo "doors after CreateDoors(): " . $truck->doors;


?>
