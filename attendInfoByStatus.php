<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน


//Test set value
$_GET['subjectCode'] = "322371";
$_GET['section'] = "1";
$_GET['semester'] = "2";
$_GET['year'] = "2561";
$_GET['date'] = "2019-01-07";
$_GET['attendanceStatus'] = "มา"
?>

<head>
    <title><?= $_GET['subjectCode'] . " sec." . $_GET['section'] . " (" . $_GET["semester"] . "/" . $_GET['year'] . ")" ?></title>
    <script>
        $(document).ready(function() {
            $('#classStudent').DataTable();
        });
    </script>
</head>

<body>
    <?php if (!empty($_SESSION["username"]) && isset($_GET['subjectCode']) && isset($_GET['year']) && isset($_GET['semester']) && isset($_GET['section'])) { ?>
        <?php include('header.php'); ?>

      

        <div class="container mt-3">

            <?php include('classCoverImage.php'); ?>

            <div class="row">
                <div class="col mt-3 ml-3">
                    <!-- Student list-->
                    <table class="table" id="classStudent">
                        <?php
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendInfoByStatus.php";
                        include($path);
                        $i = 0;
                        while ($row = $stmt->fetch()) {
                            if ($stmt->rowCount() > 0 && $i == 0) {
                                echo ' 
                                <thead><tr>
                                <th>รหัสนักศึกษา</th>
                                </tr></thead><tbody>';
                            }
                            echo '<tr>
                                <td>' . $row['stdId'] . '</td>
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