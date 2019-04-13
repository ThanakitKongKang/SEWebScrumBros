<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/model/getUserRole.php";
include_once($path);
?>

<head>
  <style>
    .icon {
      vertical-align: middle !important;
      text-align: center !important;
    }
  </style>
</head>

<?php if ($isStudent == 'true') { ?>
  <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:7.5rem;border:.1rem solid #dadce0;width:15rem;">
    <table>
      <tr>
        <td class="icon"><i class="fas fa-user"></i></td>
        <td>
          <h6 class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Student</h6>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-info"></i></td>
        <td>
          <a class="nav-link" href="#">Status check</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-sign-in-alt"></i></td>
        <td>
          <a class="nav-link" href="#">Join Class</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-flag"></i></td>
        <td>
          <a class="nav-link" href="#">Report Mistake</a>
        </td>
      </tr>
    </table>

  </nav>
<?php
} ?>

<?php if ($isTA == 'true') { ?>
  <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:22rem;border:.1rem solid #dadce0;width:15rem;">
    <table>
      <tr>
        <td class="icon"><i class="fas fa-user-tie"></i></td>
        <td>
          <h6 class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Teacher Assistant</h6>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-plus"></i></td>
        <td>
          <a class="nav-link" href="#">Create New Class</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-upload"></i></td>
        <td>
          <a class="nav-link" href="#">Upload mobile data</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-wrench"></i></td>
        <td>
          <a class="nav-link" href="#">Correct attendance</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-keyboard"></i></td>
        <td>
          <a class="nav-link" href="#">Input attendance</a>
        </td>
      </tr>
    </table>
  </nav>
<?php
}
?>

<?php if ($isTeacher == 'true') { ?>
  <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:7.5rem;border:.1rem solid #dadce0;width:15rem;">
  <table>
      <tr>
        <td class="icon"><i class="fas fa-chalkboard-teacher"></i></td>
        <td>
          <h6 class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lecturer</h6>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-plus"></i></td>
        <td>
          <a class="nav-link" href="#">Add TA</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-table"></i></td>
        <td>
        <a class="nav-link" href="#">Summary</a>
        </td>
      </tr>
      <tr>
        <td class="icon"><i class="fas fa-edit"></i></td>
        <td>
        <a class="nav-link" href="#">Edit class</a>
        </td>
      </tr>
    </table>

    
    
    
    

  </nav>
<?php
} ?>