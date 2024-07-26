<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="password.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        $password = $_POST["password"];
        echo "Your password is: $password";
    ?>


</body>
</html>



<!-- instead of using GET method,
  we are using POST method to avoid potential security risks, 
  as the password is not exposed in the URL, as a parameter -->