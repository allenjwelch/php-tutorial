<?php

class Car {

	static $wheels = 4;
	// var attached to class, not the instance
    var $hood = 1;


    function MoveWheels(){

		Car::$wheels = 10;

	}


}

$bmw = new Car();

// $bmw->wheels;

// Car::MoveWheels();

echo Car::$wheels;
// need to use $ since this is a variable and not an instance.




?>
