<?php
session_start();
$params = session_get_cookie_params();
setcookie(
    session_name(),
    '',
    time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]
);
session_destroy(); // ทำลาย session
header("refresh:5;url=login.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "head.php"; ?>
</head>

<body>

    <div class="alert alert-secondary p-3">
        <div class="container">ออกจากระบบสำเร็จ

            <b><a href="login.php">กลับหน้าหลัก</a>ใน 5 วินาที...</b>
        </div>
    </div>

</body>

</html> 