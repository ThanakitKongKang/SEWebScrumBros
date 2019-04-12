<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SEWebScrumBros/head.php";
include_once($path);
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>


<body>
    <?php if (empty($_SESSION["username"])) { ?>
    <?php include "./alert/failLogin.php"; ?>
    <?php include "./alert/accountLocked.php"; ?>
    <?php include "./alert/accNotFound.php"; ?>


    <form action="./model/check-login.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" id="login-button">Login</button>
    </form>
    <?php 
} else
    header('location:home');
?>

</body>


</html> 