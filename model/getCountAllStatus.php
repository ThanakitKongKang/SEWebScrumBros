<?php
$countStatus = [];
$thPresent = 'มา';
$thAbsent = 'ขาด';
$thLeave = 'ลา';

$stmt = $pdo->prepare("SELECT
count(attendanceStatus) count
FROM attendance_status
WHERE dayCheckName = ?
AND attendanceStatus= ?
");
$stmt->bindParam(1, $_GET['date']);
$stmt->bindParam(2, $thPresent);
$stmt->execute();
while ($row = $stmt->fetch()){
    $countStatus[0] = $row[0];
}

$stmt = $pdo->prepare("SELECT
count(attendanceStatus) count
FROM attendance_status
WHERE dayCheckName = ?
AND attendanceStatus= ?
");
$stmt->bindParam(1, $_GET['date']);
$stmt->bindParam(2, $thAbsent);
$stmt->execute();
while ($row = $stmt->fetch()){
    $countStatus[1] = $row[0];
}

$stmt = $pdo->prepare("SELECT
count(attendanceStatus) count
FROM attendance_status
WHERE dayCheckName = ?
AND attendanceStatus= ?
");
$stmt->bindParam(1, $_GET['date']);
$stmt->bindParam(2, $thLeave);
$stmt->execute();
while ($row = $stmt->fetch()){
    $countStatus[2] = $row[0];
}


?>



