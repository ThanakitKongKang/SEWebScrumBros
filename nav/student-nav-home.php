<?php 
      $stmt = $pdo->prepare("SELECT * FROM user_role,user_info where user_info.UID = user_role.UID AND user_info.UID = ?");
      $stmt->bindParam(1, $_SESSION["UID"]);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        if($row['role']== 'อาจารย์'){

        }
        if($row['role']== 'ผู้ช่วยสอน'){
          
        }
        if($row['role']== 'นักศึกษา'){
          
        }

      }
?>

<nav class="nav flex-column">
  <a class="nav-link active" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</nav>