<?php 
  $stmt = $pdo->prepare("SELECT * FROM subject,user_role,user_info 
  where user_info.UID = user_role.UID 
  AND user_role.subject_id = subject.subject_id 
  AND subject.subject_code = ?
  AND subject.year = ?
  AND subject.Semester = ? 
  AND user_role.role = 'อาจารย์' ");
$stmt->bindParam(1, $_GET['subjectCode']);
$stmt->bindParam(2, $_GET['year']);
$stmt->bindParam(3, $_GET['semester']);
$stmt->execute(); ?>