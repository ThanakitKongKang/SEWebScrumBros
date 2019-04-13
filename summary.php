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
            <?php include('nav/nav-class.php'); ?>

            <div class="container mt-3">
                <?php include('classCoverImage.php'); ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
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
</script>

</html>