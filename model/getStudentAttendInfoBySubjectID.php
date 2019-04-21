<?php
$stmt = $pdo->prepare("SELECT * FROM attendance_status a,user_info b
WHERE a.subject_id = ?
AND a.stdId = b.stdId
GROUP BY a.stdId
ORDER BY a.stdId
");
$stmt->bindParam(1, $subject_id);
$stmt->execute();
?>