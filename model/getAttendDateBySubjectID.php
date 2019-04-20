<?php 
$stmt = $pdo->prepare("SELECT DISTINCT 
DATE_FORMAT(dayCheckName,'%d/%m/%Y') AS dayCheckName
,dayCheckName AS sqlformatDayCheckName
FROM attendance_status
WHERE subject_id = ? ORDER BY dayCheckName");
$stmt->bindParam(1, $subject_id);
$stmt->execute(); ?>