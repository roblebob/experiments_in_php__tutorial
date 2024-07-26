<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Checkboxes</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>

    <hr>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>

    <hr>

    <?php
        $fruits = $_POST["fruits"];
        foreach($fruits as $fruit){
            echo $fruit;
            echo "<br>";
        } 
    ?>
</body>
</html>