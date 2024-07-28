<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post"> 
        <input type="text"  name="grade" placeholder="Enter your grade (A, ..., F)">
        <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php
        $grade = strtoupper($_POST['grade']);

        switch($grade){
            case "A":
                echo "You did great!";
                break;
            case "B":
                echo "You did good!";
                break;
            case "C":
                echo "You did OK!";
                break;
            case "D":
                echo "You did bad!";
                break;
            case "F": 
                echo "You failed!";
                break;
            default:
                echo "Invalid grade!";
        }
    ?>
</body>
</html>