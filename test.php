<html>
    <head>
        <title>Hello PHP!</title>
    </head>
    <body>
        <?php
        // Store the data in a 2D array.
        $cars = array
            (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15),
            );
        // Get acess to teh elements of the $car array using the two indicies (row and column)
        echo $cars[0][0].": In stock: ".$cars[0][1].". sold: ".$cars[0][2].".<br>";
        ?>
    </body>

</html>