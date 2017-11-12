<?php

class Car{
    
    function MoveWheels(){
        echo "Wheels move";
    }
    
    
    
    
}

if (method_exists("Car", "MoveWheels")) {
    echo "Method Exists";
} else {
    echo "NO!";
}




?>