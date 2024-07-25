<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <form action="calculator.php" method="get">
        First number: <br> 
        <input type="number" name="num1"> <br>

        Second number: <br> 
        <input type="number" name="num2"> <br> 

        <input type="submit">
    </form>

    <?php echo "<p>Result: " . ($_GET['num1'] + $_GET['num2']) . "</p>"; ?>



</body>
</html>