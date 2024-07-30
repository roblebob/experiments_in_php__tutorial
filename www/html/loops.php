<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        // While Loop
        $index = 1;
        while ($index <= 10) {
            echo $index. "<br>";
            $index++;
        }

        // Do-While Loop
        $index = 1;
        do {
            echo $index. "<br>";
            $index++;
        } while ($index <= 10);

        // For Loop
        for ($index = 1; $index <= 10; $index++) {
            echo $index. "<br>";
        }

        // Foreach Loop
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        foreach ($friends as $friend) {
            echo $friend. "<br>";
        }

    ?>
</body>
</html>