<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน

?>

<head>
    <title><?= $_GET['subjectCode'] . " " . "(" . $_GET["semester"] . "/" . $_GET['year'] . ")" ?></title>
    <script>
        $(document).ready(function() {
            $('#classStudent').DataTable();
        });
    </script>
</head>

<body>
    <?php if (!empty($_SESSION["username"]) && isset($_GET['subjectCode']) && isset($_GET['year']) && isset($_GET['semester'])) { ?>
        <?php include('header.php'); ?>

        <?php include('nav/nav-class.php'); ?>

        <div class="container mt-3">

            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/SoftEn2019/Sec2/ScrumBros/model/getSubject.php";
            include_once($path);
            while ($row = $stmt->fetch()) {
                ?>
                <div style="height:24rem;position:relative;width:100%">
                    <div class="rounded-lg" style="background-image: url('https://lh3.googleusercontent.com/-OKK_uVC0VcI/VN0oi2BxSFI/AAAAAAAAASw/RwpeLW4SPsw/w984-h209-no/12_pencils.jpg');background-repeat:no-repeat;height:100%;left:0;position:absolute;top:0;width:100%;background-size: cover;"></div>
                    <div class="rounded-lg" style="background-color:rgba(32,33,36,0.6);height:100%;left:0;position:absolute;top:0;width:100%;"></div>
                    <div style="padding:2.4rem;position:relative;">
                        <div style="font-family: 'Kanit', sans-serif;">
                            <h1 style="font-size:3.6rem;font-weight:500;line-height:4.4rem;color:#fff"><?= $row["subject_code"] . " " . $row['subjectName_Th'] ?></h1>
                            <div style="font-size:2.2rem;font-weight:400;line-height:2.8rem;color:#fff"><?= $row["subjectName_En"] ?></div>
                            <div style="font-size:1.5rem;font-weight:400;line-height:2.8rem;color:#fff"><?= "(" . $row["Semester"] . "/" . $row['year'] . ")" ?></div>
                        </div>
                    </div>
                </div>


            <?php
        } ?>


            <div class="row my-4 mb-1">
                <div class="col mr-3 text-center">
                    <h3><i class="fas fa-chalkboard-teacher"></i> ผู้รับผิดชอบคลาส</h3>
                </div>
                <div class="col ml-3 text-center">
                    <h3><i class="fas fa-users"></i> นักศึกษา</h3>
                </div>
            </div>
            <div class="row">
                <div class="col mr-3">
                    <!-- Teacher & TA list-->
                    <table class="" style="width:100%">

                        <?php
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getTeacherInClass.php";
                        include_once($path);

                        $i = 0;
                        while ($row = $stmt->fetch()) {
                            if ($stmt->rowCount() > 0 && $i == 0) {
                                echo '<thead><tr><th>อาจารย์</th>
                               
                                <th>อีเมล</th></tr></thead><tbody>';
                            }
                            echo '<tr>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                            
                                <td>' . $row['email'] . '</td>
                                </tr>';
                            $i++;
                        }
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getTAInClass.php";
                        include_once($path);
                        $i = 0;
                        while ($row = $stmt->fetch()) {
                            if ($stmt->rowCount() > 0 && $i == 0) {
                                echo '<tr><td class="pt-3"><strong>ผู้ช่วยสอน</strong><td></tr>';
                            }
                            echo '<tr>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                             
                                <td>' . $row['email'] . '</td>
                                </tr>';
                            $i++;
                        }

                        ?>

                        </tbody>
                    </table>
                </div>

                <div class="col mt-3 ml-3">
                    <!-- Student list-->
                    <table class="table" id="classStudent">
                        <?php
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getStudentInClass.php";
                        include_once($path);
                        $i = 0;
                        while ($row = $stmt->fetch()) {
                            if ($stmt->rowCount() > 0 && $i == 0) {
                                echo ' 
                                <thead><tr>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ - สกุล</th></tr></thead><tbody>';
                            }
                            echo '<tr>
                                <td>' . $row['stdId'] . '</td>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                                </tr>';
                            $i++;
                        } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>





    <?php  //end content
} ?>

    <?php if (empty($_SESSION["username"]) || !isset($_GET['subjectCode']) || !isset($_GET['year']) || !isset($_GET['semester'])) {
        echo "<div style='text-align: center' ;>";
        echo "ไม่สามารถทำรายการได้";
        echo "<a href='/SoftEn2019/Sec2/ScrumBros/login'> กรุณาเข้าสู่ระบบ</a>";
        echo "</div>";
    } ?>
</body>


</html>