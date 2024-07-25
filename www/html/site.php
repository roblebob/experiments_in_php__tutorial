<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h1>Site</h1>";
        echo "<hr>";


        $name = "John";
        $age = 25;
        $isMale = true;

        echo "<p>Welcome $name $age to our website!</p>";
        echo "<hr>";


        $name = "Jane";
        $age = 34.67;
 
        $msg = "<p>Welcome $name $age to our website!</p>";
        echo strtolower($msg);
        echo strtoupper($msg);
        echo "<p>- The previous msg has " . strlen($msg) . " words</p>";
        echo "<p>- The 7th letter is " . $msg[6 + 3] . "</p>";  // 3 is the length of the tag <p>
        $msg[6 + 3] = "A";
        echo $msg;
        echo str_replace("WelcomA", "Hello", $msg);
        echo substr($msg, 0, 5 + 3);  // 3 is the length of the tag <p>
        echo "<hr>";


        $num = -32.1;
        echo "<p>" . abs($num) . "</p>";
        echo "<p>" . pow(2, 3) . "</p>";
        echo "<p>" . sqrt(144) . "</p>";
        echo "<p>" . max(2, 10) . "</p>";
        echo "<p>" . min(2, 10) . "</p>";
        echo "<p>" . round(3.7) . "</p>";
        echo "<p>" . ceil(3.3) . "</p>";
        echo "<p>" . floor(3.9) . "</p>";
        echo "<hr>";
    ?>




    <form action="site.php" method="get">
        Name: <br> 
        <input type="text" name="name"> <br> 
        <input type="submit"> 
    </form>    
    <br>
    
    <?php echo "<p>". "▶" . $_GET['name']. "◀" . "</p>"; ?>
    <hr>



</body>
</html>