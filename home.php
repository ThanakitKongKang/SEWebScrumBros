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

    <?php if (!empty($_SESSION["SuccessLogin"])) {
        //alert แจ้งเตือนเข้าสู่ระบบสำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-success p-3">
        <div class="container">เข้าสู่ระบบสำเร็จ
        </div>
    </div>
    <?php 
    unset($_SESSION["SuccessLogin"]);
} ?>

    <div class="container mt-3">

        
            <div class="row">
                <?php 
                $setColumn = 3;
                $ColumnStart = 1;
                $stmt = $pdo->prepare("SELECT * FROM subject,user_role,user_info where user_info.UID = user_role.UID AND user_role.subject_id = subject.subject_id  AND user_info.UID = ?");
                $stmt->bindParam(1, $_SESSION["UID"]);
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    ?>
                <a href="#" style="text-decoration: none;">
                    <div class="col-4">

                        <div class="card m-3">

                            <div class="card-body col" style="min-height:250px">
                                <span class="text-muted" style="font-size:0.8em;float:right">(<?= $row["role"] ?>)</span>
                                <h4 class="text-primary clearfix"><?= $row["subjectName_Th"] ?></h4>
                                <span class="text-muted mb-3"><?= $row["subjectName_En"] ?></span>
                                <p class="card-text my-3"><?= $row["subject_code"] ?> | ปีการศึกษา 2561 | เทอม 2</p>

                            </div>

                        </div>
                </a>
            </div>


            <?php if ($ColumnStart == $setColumn) {
                echo '</div><div class="row">';
                $ColumnStart = 0;
            }
            $ColumnStart++;
        } ?>

        
    </div>

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