<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน

?>

<head>
    <title><?= $_GET['subjectCode'] . " sec.".$_GET['section'] . " (" . $_GET["semester"] . "/" . $_GET['year'] . ")" ?></title>
    <script>
        $(document).ready(function() {
            $('#classStudent').DataTable();
        });
    </script>
</head>

<body>
    <?php if (!empty($_SESSION["username"]) && isset($_GET['subjectCode']) && isset($_GET['year']) && isset($_GET['semester'])&& isset($_GET['section'])) { ?>
        <?php include('header.php'); ?>

        <?php include('nav/nav-class.php'); ?>

        <div class="container mt-3">

            <?php include('classCoverImage.php'); ?>


            <div class="row my-4 mb-1">
                <div class="col mr-3">
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
                        include($path);

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
                        include($path);

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
                        include($path);
                        $i = 0;
                        while ($row = $stmt->fetch()) {
                            if ($stmt->rowCount() > 0 && $i == 0) {
                                echo ' 
                                <thead><tr>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ - สกุล</th>
                                <th>ชั้นปี</th>
                                <th>สาขา</th>
                                </tr></thead><tbody>';
                            }
                            echo '<tr>
                                <td>' . $row['stdId'] . '</td>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                                <td>' . $row['Year'] . '</td>
                                <td>' . $row['Branch'] . '</td>
                                </tr>';
                            $i++;
                        } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>





    <?php  //end content
}
include('inClassErrorHandling.php'); ?>
</body>


</html>