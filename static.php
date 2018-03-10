<html>
    <head>
        <title>Hello PHP!</title>
    </head>
    <body>
        <?php
        function someFunc() {
            static $a = 0;
            print $a."<br>";
            $a++;
            
        }
        someFunc();
        someFunc();
        ?>
    </body>

</html>