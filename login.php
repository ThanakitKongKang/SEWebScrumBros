<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>


<body>
    <?php if (empty($_SESSION["username"])) { ?>
    <?php include "./alert/failLogin.php"; ?>
    <?php include "./alert/accountLocked.php"; ?>


    <form action="./model/check-login.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" id="login-button">Login</button>
    </form>
    <?php 
} else
    header('location:home.php');
?>

</body>


</html> 