<?php
session_start();
if(isset($_SESSION['username'])){
    header('Location: news.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="save.php" method="post">
            <input type="email" name="email"  class="form-control"><br>
            <input type="password" name="password" class="form-control"><br>
            <input type="submit" value="Save" class="form-control"><br>

    </form>
</body>
</html>