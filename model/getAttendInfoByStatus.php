<?php
$stmt = $pdo->prepare("SELECT
idAttend,
DATE_FORMAT(dayCheckName,'%d/%m/%Y') AS dayCheckName,
stdId,attendanceStatus,subject_id
FROM attendance_status
WHERE dayCheckName = ? 
AND attendanceStatus=?
ORDER BY stdId");
$stmt->bindParam(1, $_GET['date']);
$stmt->bindParam(1, $$_GET['attendanceStatus']);
$stmt->execute(); ?>
