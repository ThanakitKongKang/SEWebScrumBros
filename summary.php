<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน

?>

<head>
    <title>Summary of <?= $_GET['subjectCode'] . " sec." . $_GET['section'] . " (" . $_GET["semester"] . "/" . $_GET['year'] . ")" ?></title>

</head>

<body>
    <?php
    if (!empty($_SESSION["username"]) && isset($_GET['subjectCode']) && isset($_GET['year']) && isset($_GET['semester']) && isset($_GET['section'])) {
        if ($_SESSION['role'] == 'อาจารย์') {
            ?>
            <?php include('header.php'); ?>
            <?php include('nav/nav-class.php');
            ?>

            <div class="container mt-3">
                <?php include('classCoverImage.php'); ?>

                <div class="input-group my-3" style="width:20rem">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectDate">เลือกวันที่เรียน</label>
                    </div>
                    <?php

                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendDateBySubjectID.php";
                    include($path);
                    ?>


                    <select required id="date" class="custom-select" id="selectDate" onchange="attendanceStatus(this.value);">

                        <option selected value="">โปรดเลือก..</option>
                        <?php
                        $i = 1;
                        while ($row = $stmt->fetch()) {
                            ?>

                            <option <?php
                                    if (isset($_GET['date']) && $_GET['date'] == $row['dayCheckName']) {
                                        echo "selected";
                                    }

                                    ?> value="<?= $row['dayCheckName'] ?>">คาบที่ <?= $i . " " . $row['dayCheckName'] ?></option>

                            <?php
                            $i++;
                        }
                        ?>
                    </select>


                </div>

                <div>
                    <?php if (isset($_GET['date'])) {
                       //แสดงปุ่ม
                        
                    }
                    ?>
                </div>

            </div>

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
    $(function() {
        $('select').selectpicker();
    });

    function attendanceStatus(date) {
        var date = $('#date').val();
        var parts = window.location.search.substr(1).split("&");
        var $_GET = {};
        for (var i = 0; i < parts.length; i++) {
            var temp = parts[i].split("=");
            $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
        }
        var go = "http://localhost/SoftEn2019/Sec2/ScrumBros/summary.php?subjectCode=" +
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
</script>

</html>