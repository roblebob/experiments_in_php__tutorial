<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="calculator2.php" method="post">
        First Num: <br> <input type="number" step="0.000001" name="num1"> <br>
        OP: <br> <input type="textbox" name="op"> <br>
        Second Num:<br> <input type="number" step="0.000001" name="num2"> <br>  
        <input type="submit">
    </form>
    <hr>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
        if ($op == "+") {
            echo $num1 + $num2;
        } elseif ($op == "-") {
            echo $num1 - $num2;
        } elseif ($op == "*") {
            echo $num1 * $num2;
        } elseif ($op == "/") {
            echo $num1 / $num2;
        } else {
            echo "Invalid operator";
        }
    ?>
</body>
</html>