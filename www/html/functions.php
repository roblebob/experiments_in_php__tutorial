<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Functions</title>
</head>
<body>
    
    <?php
        function sayHi($name, $age){
            echo "Hello $name, you are $age years old. <br>";
        }

        sayHi("Mike", 40);
        sayHi("Dave", 30);
        sayHi("Oscar", 20);
    ?>

</body>
</html>