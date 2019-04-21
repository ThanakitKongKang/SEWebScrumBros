<?php
$thAttendStatus='';
if($_GET['attendanceStatus']=='present'){
    $thAttendStatus = 'มา';
   
}
else if($_GET['attendanceStatus']=='absent'){
    $thAttendStatus = 'ขาด';
   
}
else if($_GET['attendanceStatus']=='leave'){
    $thAttendStatus = 'ลา';
  
}
$stmt = $pdo->prepare("SELECT * FROM attendance_status a,user_info b
WHERE dayCheckName = ? 
AND attendanceStatus=?
AND a.subject_id = ?
AND a.stdId = b.stdId
ORDER BY a.stdId");
$stmt->bindParam(1, $_GET['date']);
$stmt->bindParam(2, $thAttendStatus);
$stmt->bindParam(3, $subject_id);
$stmt->execute();
?>