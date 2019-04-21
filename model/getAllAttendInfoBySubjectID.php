<?php
$allAttend = $pdo->prepare("SELECT * FROM attendance_status a,user_info b
WHERE a.subject_id = ?
AND a.stdId = b.stdId
ORDER BY a.stdId
");
$allAttend->bindParam(1, $subject_id);
$allAttend->execute();
?>