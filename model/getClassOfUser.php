<?php $setColumn = 3;
            $ColumnStart = 1;
            $stmt = $pdo->prepare("SELECT * FROM subject,user_role,user_info where user_info.UID = user_role.UID AND user_role.subject_id = subject.subject_id  AND user_info.UID = ? ORDER BY subject.subjectName_Th DESC, subject.section ASC");
            $stmt->bindParam(1, $_SESSION["UID"]);
            $stmt->execute();
?>