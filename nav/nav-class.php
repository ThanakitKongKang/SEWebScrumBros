<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/model/getUserRole.php";
include($path);
?>

<head>
  <style>
    .icon {
      vertical-align: middle !important;
      text-align: center !important;
    }
  </style>
</head>

<?php
//ถ้าเป็นคลาสที่ผู้ใช้คนที่ล็อกอินอยู่เป็น Student จะขึ้นเมนูให้
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/model/getTAInClass.php";
include($path);

$isThisStudentInClass = 'false';
while ($row = $stmt->fetch()) {
  if ($row['UID'] == $_SESSION['UID']) {
    $isThisStudentInClass = 'true';
  }
}

if ($isStudent == 'true') { ?>
  <!-- <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:7.5rem;border:.1rem solid #dadce0;width:15rem;"> -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i> Student</a>
    <div class="dropdown-menu">
      <table>
        <?php if ($isThisStudentInClass == 'true') { ?>
          <tr class="dropdown-item">
            <td class="icon"><i class="fas fa-info"></i></td>
            <td>
              <a class="nav-link" href="#">Status check</a>
            </td>
          </tr>
        <?php } ?>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-sign-in-alt"></i></td>
          <td>
            <a class="nav-link" href="#">Join Class</a>
          </td>
        </tr>

        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-flag"></i></td>
          <td>
            <a class="nav-link" href="#">Report Mistake</a>
          </td>
        </tr>

      </table>
    </div>
  </li>
  <!-- </nav> -->
<?php
} ?>

<?php
//ถ้าเป็นคลาสที่ผู้ใช้คนที่ล็อกอินอยู่เป็น TA จะขึ้นเมนูให้
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/model/getTAInClass.php";
include($path);

$isThisTAInClass = 'false';
while ($row = $stmt->fetch()) {
  if ($row['UID'] == $_SESSION['UID']) {
    $isThisTAInClass = 'true';
  }
}
if ($isThisTAInClass == 'true') { ?>
  <!-- <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:22rem;border:.1rem solid #dadce0;width:15rem;"> -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-tie"></i> Teacher Assistant</a>
    <div class="dropdown-menu">
      <table>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-plus"></i></td>
          <td>
            <a class="nav-link" href="#">Create New Class</a>
          </td>
        </tr>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-upload"></i></td>
          <td>
            <a class="nav-link" href="#">Upload mobile data</a>
          </td>
        </tr>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-wrench"></i></td>
          <td>
            <a class="nav-link" href="#">Correct attendance</a>
          </td>
        </tr>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-keyboard"></i></td>
          <td>
            <a class="nav-link" href="#">Input attendance</a>
          </td>
        </tr>
      </table>
    </div>
  </li>

  <!-- </nav> -->
<?php
}
?>

<?php
//ถ้าเป็นคลาสที่ผู้ใช้คนที่ล็อกอินอยู่เป็น Teacher จะขึ้นเมนูให้
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/model/getTeacherInClass.php";
include($path);

$isThisTeacherInClass = 'false';
while ($row = $stmt->fetch()) {
  if ($row['UID'] == $_SESSION['UID']) {
    $isThisTeacherInClass = 'true';
  }
}

if ($isThisTeacherInClass == 'true') { ?>
  <!-- <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:7.5rem;border:.1rem solid #dadce0;width:15rem;"> -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-chalkboard-teacher"></i> Lecturer</a>
    <div class="dropdown-menu">
      <table>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-plus"></i></td>
          <td>
            <a class="nav-link" href="#">Add TA</a>
          </td>
        </tr>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-table"></i></td>
          <td>
            <a class="nav-link" href="summary.php?subjectCode=<?= $_GET['subjectCode'] ?>&year=<?= $_GET['year'] ?>&semester=<?= $_GET['semester'] ?>&section=<?= $_GET['section'] ?>">Summary</a>
          </td>
        </tr>
        <tr class="dropdown-item">
          <td class="icon"><i class="fas fa-edit"></i></td>
          <td>
            <a class="nav-link" href="#">Edit class</a>
          </td>
        </tr>
      </table>
    </div>
  </li>





  <!-- </nav> -->
<?php
} ?>