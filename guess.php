<html>
    <head>
        <title>Hello PHP!</title>
    </head>
    <body>
        <?php
        // Guess the output  pass by value:
        $number1 = 2;
        $number2 = 3;
        
        function multiply ($num1, $num2) {
            $num1 = 3;
            echo ($num1*$num2."<br>");
        }
        
        multiply($number1, $number2);
        multiply(2, 3);
        
        echo ($number1."<br>");
        
        // Guess the output - pass by reference:
        $number1 = 2;
        $number2 = 3;
        
        function multiplyV2 (&$num1, $num2) {
            $num1 = 3;
            echo($num1*$num2."<br>");
        }
        
        multiplyV2($number1, $number2);
        echo ($number1."<br");
        ?>
    </body>

</html>