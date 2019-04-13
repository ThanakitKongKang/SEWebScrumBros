<?php 
if (empty($_SESSION["username"])) {
    echo "<div style='text-align: center' ;>";
    echo "ไม่สามารถทำรายการได้";
    echo "<a href='/SoftEn2019/Sec2/ScrumBros/login.php'> กรุณาเข้าสู่ระบบ</a>";
    echo "</div>";
}
else if (!isset($_GET['subjectCode']) || !isset($_GET['year']) || !isset($_GET['semester'])) {
    echo "<div style='text-align: center' ;>";
    echo "ไม่สามารถทำรายการได้";
    echo "<a href='/SoftEn2019/Sec2/ScrumBros/'> กรุณาลองใหม่อีกครั้ง</a>";
    echo "</div>";
 }
 ?>