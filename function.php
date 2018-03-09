<html>
    <head>
        <title>Hello PHP!</title>
    </head>
    <body>
        <?php
        // Pass by value - we pass a COPY
        function greeting($name) {
            echo "Hello $name!";
            $name = "done";
        }
        
        $name = "Fred";
        greeting($name);
        echo "Message: $name";
        
        // Breakline...
        print("<br/>");
        
        // Pass by reference - mutates!
        function greetingTwo(&$name)
        {
            echo "Hello, $name!";
            $name = "done";
        }
        
         $name = "Fred";
        greetingTwo($name);
        echo "Message: $name";
        
        ?>
    </body>

</html>