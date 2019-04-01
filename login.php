<!DOCTYPE html>
<?php include "./model/connect.php";
session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "./head.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body>
    <?php include "./alert/failLogin.php"; ?>
    <?php include "./alert/accountLocked.php"; ?>
    <?php include "./alert/accNotFound.php"; ?>


    <form action="./model/check-login.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" id="login-button">Login</button>
    </form>
</body>

</html> 