<?php

class Car {


    function MoveWheels(){

        echo "Wheels move";


    }



}

if(method_exists("Car", "MoveWheels")) {
	// 2 parameters: class, method

echo "The Method Exist";

} else {

echo "no it does not";

}





?>
