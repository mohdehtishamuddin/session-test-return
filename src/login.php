<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <?php
    require ('check.php');
    if(isset($failed)){
        echo "<div>Invalid User/password</div>";
    }
    ?>
    <form action="check.php" method="POST">
        <input type="text" name="user" placeholder="user name">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="login">
    </form>
</body>
</html>