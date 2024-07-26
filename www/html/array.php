<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim", 1 );

        echo $friends;
        echo "<br>";

        echo $friends[0];
        echo "<br>";

        $friends[0] = 1;
        echo count($friends);
        echo "<br>";

        print_r($friends);
        echo "<br>";


        $friends[10] = "Creed";
        print_r($friends);
        echo "<br>";
        echo count($friends);
    ?>


</body>
</html>