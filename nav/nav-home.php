<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SEWebScrumBros/model/getUserRole.php";
include_once($path);
?>

<?php if ($isStudent == 'true') { ?>
<nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:7.5rem;border:.1rem solid #dadce0;">

    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-user"></i> Student</a>
    <a class="nav-link active" href="#"><i class="fas fa-sign-in-alt"></i> Join Class</a>
    <a class="nav-link" href="#"><i class="far fa-flag"></i> Report Mistake</a>



</nav>
<?php 
} ?>

<?php if ($isTA == 'true') { ?>
<nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:20rem;border:.1rem solid #dadce0;">

    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-user-tie"></i> Teacher Assistant</a>
    <a class="nav-link" href="#"><i class="fas fa-plus"></i> Create New Class</a>
    <a class="nav-link" href="#"><i class="fas fa-upload"></i> Upload mobile data</a>
</nav>
<?php 
}
?>

<?php if ($isTeacher == 'true') { ?>
<nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:7.5rem;border:.1rem solid #dadce0;">

    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-chalkboard-teacher"></i> Lecturer</a>
    <a class="nav-link active" href="#"><i class="fas fa-plus"></i> Create Class</a>

</nav>
<?php 
} ?> 