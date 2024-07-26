<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Associated Arrays</title>
</head>
<body>
    
    <form action="associated_arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <hr>

    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo $grades[$_POST["student"]];
    ?>

</body>
</html>