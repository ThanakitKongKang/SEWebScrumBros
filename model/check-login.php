<?php
include "connect.php";
session_start();
 $stmt = $pdo->prepare("SELECT * FROM user_info WHERE username = ? AND password = ?");
  $stmt->bindParam(1, $_POST["username"]);
  $stmt->bindParam(2, $_POST["password"]);
  $stmt->execute();
  $row = $stmt->fetch();
// หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row

  if (!empty($row[0])) {
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    $_SESSION["UID"] = $row["UID"];  
    $_SESSION["username"] = $row["username"];
    $_SESSION["firstName"] = $row["firstName"];
    $_SESSION["lastName"] = $row["lastName"];
    $_SESSION["stdId"] = $row["stdId"];
    $_SESSION["SuccessLogin"] = "Success";
    // แสดง link เพื่อไปยังหน้าต่อไปหลังจากตรวจสอบสำเร็จแล้ว
  // กรณี username และ password ไม่ตรงกัน

    header('location:../home.php');
    ?>
<?php } 

  else {
    echo "<div style='text-align: center';>";
    echo "ไม่สำเร็จ ชื่อหรือรหัสผ่านไม่ถูกต้อง";
    echo "<a href='../login.php'> เข้าสู่ระบบอีกครัง</a>"; 
    echo "</div>";
  }
  ?>
     
  






