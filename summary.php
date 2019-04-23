<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน

?>

<head>
    <?php $title = $_GET['subjectCode'] . " sec." . $_GET['section'] . " (" . $_GET["semester"] . "/" . $_GET['year'] . ")"; ?>
    <title>Summary of <?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="css/card.css">
    <style>
        th {
            white-space: nowrap;
        }

        td {
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_SESSION["username"]) && isset($_GET['subjectCode']) && isset($_GET['year']) && isset($_GET['semester']) && isset($_GET['section'])) {
        if ($_SESSION['role'] == 'อาจารย์') {
            ?>
            <?php include('header.php'); ?>



            <div class="container mt-3">
                <div class="row justify-content-start mb-2">
                    <?php
                    $slash = "<a href='#' class='nav-link py-0 disabled'>/</a>";

                    if (basename($_SERVER['PHP_SELF']) == 'summary.php') {
                        echo "<a href='home.php' class='nav-link p-0'>home </a>";
                        echo $slash;

                        echo "<a href='class.php?subjectCode=" .  $_GET['subjectCode'] . "&year=" .  $_GET['year'] . "&semester=" .  $_GET['semester'] . "&section=" .  $_GET['section'] . "'class='nav-link p-0'>" . $title . "</a>";
                        echo $slash;
                        echo "<a href='#' class='nav-link p-0 disabled'>Summary of " . $title . "</a>";
                    }
                    ?>
                </div>
                <?php include('classCoverImage.php'); ?>

                <div class="input-group my-3" style="width:28rem">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectDate">เลือกเพื่อดูข้อมูลการเข้าเรียน</label>
                    </div>
                    <?php

                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendDateBySubjectID.php";
                    include($path);
                    ?>


                    <select required id="date" class="custom-select" id="selectDate" onchange="attendanceStatus(this.value);">
                        <?php if ($getDate->rowCount() <= 0) {
                            echo "<option selected value='' disabled>ไม่มีข้อมูลการเข้าเรียน</option>";
                        } else {
                            echo "<option selected value='' disabled>เลือก วัน/เดือน/ปี..</option>";
                        }
                        if ($getDate->rowCount() > 0) { ?>
                            <option <?php if (isset($_GET['date']) && $_GET['date'] == 'summaryAllDate') {
                                        echo "selected";
                                    } ?> value="summaryAllDate">ข้อมูลการเข้าเรียนทุกคาบ</option>
                        <?php }
                    $i = 1;
                    while ($row = $getDate->fetch()) {
                        ?>

                            <option <?php
                                    if (isset($_GET['date']) && $_GET['date'] == $row['sqlformatDayCheckName']) {
                                        echo "selected";
                                        $thisDate = $row['dayCheckName'];
                                    }

                                    ?> value="<?= $row['sqlformatDayCheckName'] ?>">วัน/เดือน/ปี ที่ : <?= $row['dayCheckName'] ?></option>

                            <?php
                            $i++;
                        }
                        ?>
                    </select>


                </div>

                <div id="cards">

                    <?php if (isset($_GET['date']) && $_GET['date'] != 'summaryAllDate') {
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getCountAllStatus.php";
                        include($path);

                        ?>
                        <h3 class="text-center my-3 mb-4">สรุปข้อมูลการมาเรียนของนักศึกษา วัน/เดือน/ปี ที่ : <?= $thisDate ?></h3>
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2 mx-1">
                                <div class="present
                                     <?php
                                        if (!isset($_GET['attendanceStatus'])) {
                                            echo "btn-success";
                                        } else if (isset($_GET['attendanceStatus']) && $_GET['attendanceStatus'] == 'present') {
                                            echo "btn-success";
                                        }
                                        if (isset($_GET['attendanceStatus']) && $_GET['attendanceStatus'] != 'present') {
                                            echo "btn-secondary";
                                        }
                                        ?>" title="คลิกเพื่อดูข้อมูลนักศึกษาที่มาเรียน">
                                    <div>
                                        <span class="bg-white text-dark px-4 cardHeader rounded">มา</span>
                                        <span><?= $countStatus[0] ?></span>
                                        <input type="hidden" id="countStatusPresent" value="<?= $countStatus[0] ?>">
                                        <span class="bg-white text-dark px-2 cardFooter">คน</span>

                                    </div>



                                </div>
                            </div>
                            <div class="col col-lg-2 mx-1">
                                <div class="absent 
                                     <?php if (!isset($_GET['attendanceStatus'])) {
                                            echo "btn-danger";
                                        } else if (isset($_GET['attendanceStatus']) && $_GET['attendanceStatus'] == 'absent') {
                                            echo "btn-danger";
                                        } else if (isset($_GET['attendanceStatus']) && $_GET['attendanceStatus'] != 'absent') {
                                            echo "btn-secondary";
                                        }
                                        ?>" title="คลิกเพื่อดูข้อมูลนักศึกษาที่ขาดเรียน">
                                    <div>
                                        <span class="bg-white text-dark px-4 cardHeader rounded">ขาด</span>
                                        <span> <?= $countStatus[1] ?></span>
                                        <input type="hidden" id="countStatusAbsent" value="<?= $countStatus[1] ?>">
                                        <span class="bg-white text-dark px-2 cardFooter">คน</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col col-lg-2 mx-1">
                                <div class="leave 
                                   <?php
                                    if (!isset($_GET['attendanceStatus'])) {
                                        echo "btn-warning";
                                    } else if (isset($_GET['attendanceStatus']) && $_GET['attendanceStatus'] == 'leave') {
                                        echo "btn-warning";
                                    } else if (isset($_GET['attendanceStatus']) && $_GET['attendanceStatus'] != 'leave') {
                                        echo "btn-secondary";
                                    }
                                    ?>" title="คลิกเพื่อดูข้อมูลนักศึกษาที่ลา">
                                    <div>
                                        <span class="bg-white text-dark px-4 cardHeader rounded">ลา</span>
                                        <span> <?= $countStatus[2] ?></span>
                                        <input type="hidden" id="countStatusLeave" value="<?= $countStatus[2] ?>">
                                        <span class="bg-white text-dark px-2 cardFooter">คน</span>
                                    </div>


                                </div>
                            </div>
                        </div>

                    <?php

                }
                ?>
                </div>

                <?php
                if (isset($_GET['attendanceStatus'])) {
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendInfoByStatus.php";
                    include($path);

                    ?>
                    <h3 class="text-center my-3 mb-4" style="margin-top:13rem!important">ข้อมูลของนักศึกษาที่ <span class="text-primary"><?= $thAttendStatus ?></span> ในวัน/เดือน/ปี ที่ : <?= $thisDate ?></h3>
                <?php } ?>

                <?php if (isset($_GET['date']) && isset($_GET['attendanceStatus'])) { ?>
                    <div id="attendStatus">
                        <!-- Student list-->
                        <?php

                        echo "<table class='table dataTable' id='classStudent'>";
                        $i = 0;
                        while ($row = $stmt->fetch()) {
                            if ($stmt->rowCount() > 0 && $i == 0) {
                                echo '<thead><tr>
                                <th >รหัสนักศึกษา</th>
                                <th>ชื่อ - สกุล</th>
                                <th class="text-center">ชั้นปี</th>
                                <th class="text-center">สาขา</th>
                                <th class="text-center">สถานะ</th>
                                <th class="text-center">หมายเหตุ</th>'; 

                                echo '</tr></thead><tbody>';
                            }
                            echo '<tr>
                                <td>' . $row['stdId'] . '</td>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                                <td class="text-center">' . $row['Year'] . '</td>
                                <td class="text-center">' . $row['Branch'] . '</td>
                                <td class="text-center">' . $row['attendanceStatus'] . '</td>';
                                if ($row['note'] == null) {
                                    echo '<td class="text-center">-</td>';
                                } else  if ($row['note'] != null) {
                                    echo '<td class="text-center">' . $row['note'] . '</td>';
                                }
                            
                            echo '</tr>';
                            $i++;
                        } ?>
                        </tbody>
                        </table>

                    </div>
                <?php } ?>



            </div>
            <?php if (isset($_GET['date']) && $_GET['date'] == 'summaryAllDate') {
                //ตรงนี้จะ include ข้อมูลโดยรวมมา
                include('summaryAllDate.php')
                ?>
            <?php } ?>

        <?php  //end content
    } else if ($_SESSION['role'] != 'อาจารย์') {
        echo "<div style='text-align: center' ;>";
        echo "ไม่สามารถทำรายการได้";
        echo "<a href='/SoftEn2019/Sec2/ScrumBros/'> กรุณาลองใหม่อีกครั้ง</a>";
        echo "</div>";
    }
}
include('inClassErrorHandling.php');
?>
</body>

<script>
    function attendanceStatus(date) {
        var date = $('#date').val();
        var parts = window.location.search.substr(1).split("&");
        var $_GET = {};
        for (var i = 0; i < parts.length; i++) {
            var temp = parts[i].split("=");
            $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
        }
        var go = "summary.php?subjectCode=" +
            $_GET['subjectCode'] +
            "&year=" + $_GET['year'] +
            "&semester=" + $_GET['semester'] +
            "&section=" + $_GET['section'];
        $.ajax({
            type: "GET",
            data: "date=" + date,
            success: function(result) {
                window.location.href = go + "&date=" + date;
            }
        });
    };
    $(document).ready(function() {
        $('#classStudent').DataTable();
    });
</script>
<script type="text/javascript" src="js/card.js"></script>

</html>