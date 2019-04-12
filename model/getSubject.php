<?php 
$stmt = $pdo->prepare("SELECT * FROM subject WHERE subject.subject_code = ? AND subject.year = ? AND subject.Semester = ?");
$stmt->bindParam(1, $_GET['subjectCode']);
$stmt->bindParam(2, $_GET['year']);
$stmt->bindParam(3, $_GET['semester']);
$stmt->execute(); ?>