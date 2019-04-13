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
    <nav class="nav flex-column shadow-sm p-3 mb-5 bg-white rounded" style="position:fixed;left:5rem;top:20rem;border:.1rem solid #dadce0;width:15rem;">
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
                    <a class="nav-link" href="#">Create New Class</a>
                </td>
            </tr>

        </table>






    </nav>
<?php
} ?>