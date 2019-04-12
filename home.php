<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SEWebScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน

?>

<head>
    <title>Homepage</title>
</head>

<body>
    <?php if (!empty($_SESSION["username"])) { ?>
    <?php include('header.php'); ?>
    <?php include('alert/successLogin.php'); ?>

    <?php include('nav/nav-home.php'); ?>
    <div class="container mt-3">
  

        <div class="row">
            <?php 
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/SEWebScrumBros/model/getClassOfUser.php";
            include_once($path);
            

            while ($row = $stmt->fetch()) {
                ?>
            <a href="class/<?= $row['subject_code'] ?>/<?= $row['year'] ?>/<?= $row['Semester'] ?>" style="text-decoration: none;">
                <div class="col-4">

                    <div class="card m-3">

                        <div class="card-body col border border-primary" style="min-height:250px">
                            <span <?php if ($row["role"] == 'ผู้ช่วยสอน')
                                        echo "class='text-success '";
                                    else
                                        echo "class='text-info'"; ?> style="font-size:0.8em;float:right;">(<?= $row["role"] ?>)</span>
                            <h4 class="text-primary clearfix"><?= $row["subjectName_Th"] ?></h4>
                            <span class="text-muted mb-3"><?= $row["subjectName_En"] ?></span>
                            <p class="card-text my-3"><?= $row["subject_code"] ?> | ปีการศึกษา <?= $row["year"] ?> | เทอม <?= $row["Semester"] ?> </p>

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

    <?php  //end of content
} ?>

    <?php if (empty($_SESSION["username"])) {
        echo "<div style='text-align: center' ;>";
        echo "ไม่สามารถทำรายการได้";
        echo "<a href='/SEWebScrumBros/login'> กรุณาเข้าสู่ระบบ</a>";
        echo "</div>";
    } ?>
</body>

</html> 