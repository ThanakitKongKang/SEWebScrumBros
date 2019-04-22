<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
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
      
        <div class="container mt-3">
            <h2 class="text-center my-4">
                คลาสทั้งหมดที่ <span class="text-primary"><?= $_SESSION['firstName'] . " " . $_SESSION['lastName'] ?></span>
                <?php if ((isset($isStudent) && $isStudent == 'true') && (isset($isTA) && $isTA != 'true')) {
                    echo "ศึกษา";
                } else  if ((isset($isStudent) && $isStudent == 'true') && (isset($isTA) && $isTA == 'true')) {
                    echo "ศึกษา / ";
                }
                if ((isset($isTeacher) && $isTeacher == 'true') || (isset($isTA) && $isTA == 'true')) {
                    echo "รับผิดชอบ";
                }
                ?>


            </h2>

            <div class="row">
                <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/SoftEn2019/Sec2/ScrumBros/model/getClassOfUser.php";
                include_once($path);


                while ($row = $stmt->fetch()) {
                    ?>
                    <a href="class.php?subjectCode=<?= $row['subject_code'] ?>&year=<?= $row['year'] ?>&semester=<?= $row['Semester'] ?>&section=<?= $row['section'] ?>" style="text-decoration: none;">
                        <div class="col-4">

                            <div class="card m-3">

                                <div class="card-body col border border-primary" style="min-height:250px">
                                    <span <?php if ($row["role"] == 'ผู้ช่วยสอน')
                                                echo "class='text-success '";
                                            else
                                                echo "class='text-info'"; ?> style="font-size:0.8em;float:right;">(<?= $row["role"] ?>)</span>
                                    <h4 class="text-primary clearfix className" title="<?= $row["subjectName_Th"] ?>"><?= $row["subjectName_Th"] ?></h4>
                                    <span class="text-muted mb-3 className"><?= $row["subjectName_En"] ?></span>
                                    <p class="card-text my-3"><?= $row["subject_code"] ?> | ปีการศึกษา <?= $row["year"] ?> | เทอม <?= $row["Semester"] ?> </p>
                                    <p>section :
                                        <?= $row["section"] ?>
                                    </p>

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
        echo "<a href='/SoftEn2019/Sec2/ScrumBros/login.php'> กรุณาเข้าสู่ระบบ</a>";
        echo "</div>";
    } ?>
</body>

</html>