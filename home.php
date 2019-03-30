<!DOCTYPE html>
<?php include "./model/connect.php";
session_start(); ?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include "head.php"; ?>
    </head>

    <body>
        <?php if (!empty($_SESSION["username"])) { ?>
        <?php include('header.php'); ?>
      
        <?php 
    } ?>

        <?php if (empty($_SESSION["username"])) {
            echo "<div style='text-align: center' ;>";
            echo "ไม่สามารถทำรายการได้";
            echo "<a href='login.php'> กรุณาเข้าสู่ระบบ</a>";
            echo "</div>";
        } ?>
    </body>

    </html> 