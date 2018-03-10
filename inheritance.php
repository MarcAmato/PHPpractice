<!DOCTYPE html>
<html>
<head>
</head>
    <body>
        <?php
        // Example of OO inheritance in PHP
        class Something {
            public $x;                      // public attribute (variable) declared
            
            public function setX($v) {      // public method declared
                $this->x=$v;
            }
            public function getX() {
                return $this->x;
            }
        }
        
        class Another extends Something {
            public $y;
            
            public function setY($v) {
                $this->y=$v;
            }
            public function getY() {
                return $this->y;
            }
        }
        
        $obj2=new Another;    // Define an object
        $obj2->setX(6);         // set member variable x by using member funtion setX()
        $obj2->setY(7);         // set member variable y by using member function setY()
        
        $valX=$obj2->getX();    // assign $valX
        $valY=$obj2->getY();    // assign $valY
        echo $valX."<br/>";
        echo $valY;
        ?>
    </body>
</html>
