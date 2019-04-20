<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/SoftEn2019/Sec2/ScrumBros/home.php">ScrumBros</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="/SoftEn2019/Sec2/ScrumBros/home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>

            <?php if (basename($_SERVER['PHP_SELF']) == 'home.php') {
                include('nav/nav-home.php');
            } ?>
            <?php if (basename($_SERVER['PHP_SELF']) == 'class.php' || basename($_SERVER['PHP_SELF']) == 'summary.php') {
                include('nav/nav-class.php');
            } ?>

        </ul>

        <form class="form-inline my-2 my-lg-0 mr-auto">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>


        <?php if (!empty($_SESSION["firstName"])) { ?>
            <span class="navbar-text fsize text-primary"><?= $_SESSION["firstName"], " ", $_SESSION["lastName"] ?> </span>
            <a href="/SoftEn2019/Sec2/ScrumBros/logout.php"><button class="btn btn-danger mx-3" type="button" name="logout">Logout <i class="fas fa-sign-out-alt"></i></button></a>

        <?php
    } ?>

    </div>
</nav>