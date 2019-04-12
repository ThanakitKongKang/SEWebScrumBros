<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/SEWebScrumBros/home">ScrumBros</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="/SEWebScrumBros/home"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            -->
        </ul>
        
        <form class="form-inline my-2 my-lg-0 mr-auto">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
         

        <?php if (!empty($_SESSION["firstName"])) { ?>
        <span class="navbar-text fsize text-primary"><?= $_SESSION["firstName"]," ",$_SESSION["lastName"] ?> </span>
        <a href="/SEWebScrumBros/logout.php"><button class="btn btn-danger mx-3" type="button" name="logout">Logout <i class="fas fa-sign-out-alt"></i></button></a>

        <?php 
    } ?>

    </div>
</nav> 