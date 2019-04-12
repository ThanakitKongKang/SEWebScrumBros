<?php 
$stmt = $pdo->prepare("SELECT * FROM user_role,user_info where user_info.UID = user_role.UID AND user_info.UID = ?");
$stmt->bindParam(1, $_SESSION["UID"]);
$stmt->execute();
$isTeacher = 'false';
$isTA = 'false';
$isStudent = 'false';
while ($row = $stmt->fetch()) {
    if ($row['role'] == 'อาจารย์') {
        $isTeacher = 'true';
    } else if ($row['role'] == 'ผู้ช่วยสอน') {
        $isTA = 'true';
    } else {
        $isStudent = 'true';
    }
}
 