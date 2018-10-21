<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
	var $doors = 4;
	var $gasTank = "full";


    function __construct(){
		// calls func each time a class instance has been initiated

    	//  echo $this->wheels = 10;
        echo "Gas Tank: ". $this->gasTank . "<br>";

    }



}

$bmw = new Car();

$truck = new Car();

$semi = new Car();
?>
