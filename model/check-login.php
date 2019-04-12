<?php
include "connect.php";
include "../head.php";
session_start();

$stmt = $pdo->prepare("SELECT * FROM user_info WHERE username = ?");
$stmt->bindParam(1, $_POST["username"]);
$stmt->execute();
$row = $stmt->fetch();
//เช็คว่ามี username นี้ในระบบไหม
if (!empty($row[0])) {
  //เช็คว่าบัญชีถูกล็อกหรือยัง
  if ($row["count_CheckLogin"] < 3) {
    $stmt = $pdo->prepare("SELECT * FROM user_info LEFT JOIN user_role ON user_info.UID = user_role.UID WHERE username = ? AND password = ?");
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
      $_SESSION["email"] = $row["email"];
      $_SESSION["role"] = $row["role"];
      $_SESSION["successLogin"] = true;

      //อัพเดทค่า count_CheckLogin ให้ = 0 เมื่อล็อกอินผ่าน
      $stmt = $pdo->prepare("UPDATE user_info SET count_CheckLogin = 0 WHERE username = ?");
      $stmt->bindParam(1, $_POST["username"]);
      $stmt->execute();
      header('location:../home.php');
      ?>
<?php 
} else {
  //อัพเดทค่า count_CheckLogin ให้ +1
  $stmt = $pdo->prepare("UPDATE user_info SET count_CheckLogin = count_CheckLogin + 1 WHERE username = ?");
  $stmt->bindParam(1, $_POST["username"]);
  $stmt->execute();
  //ดึงค่า count_CheckLogin แสดงให้ผู้ใช้เห็นว่าล็อกอินได้อีกกี่ครั้ง
  $stmt = $pdo->prepare("SELECT * FROM user_info WHERE username = ?");
  $stmt->bindParam(1, $_POST["username"]);
  $stmt->execute();
  $row = $stmt->fetch();
  $_SESSION["failedLogin"] = 3 - $row["count_CheckLogin"];
  if ($row["count_CheckLogin"] == 3) {
    $_SESSION["accountLocked"] = true;
  }
  header('location:../login.php');
}
}
//กรณีบัญชีถูกล็อก
else {
  $_SESSION["accountLocked"] = true;
  header('location:../login.php');
}
} else {
  $_SESSION["accNotFound"] = true;
  header('location:../login.php');
}
?> 