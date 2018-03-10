<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <?php
        // Example of polymorphism in PHP: EG a Car and a Bike class have a different move().
        class Vehicle {
            public function _construct($type) {
                echo "How to move $type?<br/>";
            }
        }
        
        class Car extends Vehicle {
            public function move() {
                return "press the accelerator.<br/>";
            }
        }
        
        class Bike extends Vehicle {
            public function move() {
                return "pedal a bicycle.<br/>";
            }
        }
        $bike = new Bike('bike');
        echo $bike->move();
        $car = new Car('car');
        echo $car->move();  
        ?>
    </body>
</html>