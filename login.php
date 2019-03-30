<!DOCTYPE html>
<?php include "./model/connect.php";
session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "head.php";?>
    

</head>

<body>
    <?php include('header.php'); ?>
    <div class="container">
        
            <div class="form-group shadow p-3 mb-5 bg-white rounded p-3" style="top:30%;left:30%;position: fixed;">
                <form action="./model/check-login.php" method="POST">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">username</span>
                        </div>
                        <input class="form-control" type="text" placeholder="Username" name="username">

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">password</span>
                        </div>
                        <input class="form-control" type="password" placeholder="Password" name="password">

                    </div>


                    <button class="btn btn-primary" type="submit" id="login-button">Login</button>

                </form>
            </div>
        
        <!--
            <?php if (empty($_SESSION["firstName"])) { ?>
            <a href="login-form.php?a=1"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">เข้าสู่ระบบ</button></a>
            <?php 
        } ?>


            <?php if (!empty($_SESSION["firstName"])) { ?>
            <span class="navbar-text fsize">สวัสดี <?= $_SESSION["firstName"] ?></span>
            <a href="logout.php"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">ออกจากระบบ</button></a>

            <?php 
        } ?>
-->

        </form>
    </div>
</body>

</html> 