<div class="">
    <button class="navbar-toggler border-light" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header text-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">IMMOBELLO</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page"
                        href="<?= URL; ?>accueil">Accueil</a>
                </li>

                <?php if(empty($_SESSION['profil'])) : ?>

                <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page"
                        href="<?= URL; ?>inscription">Inscription</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page"
                        href="<?= URL; ?>connexion">Connexion</a>
                </li>


                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page"
                        href="<?= URL; ?>compte/profil">Mon
                        Compte</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page"
                        href="<?= URL; ?>compte/deconnexion">Déconnexion</a>
                </li>
                <?php endif ?>;

            </ul>
        </div>
    </div>
</div>


<!-- 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= URL; ?>accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>page1">page1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL; ?>page2">page2</a>
                </li>
            </ul>
        </div>
    </div>
    </nav> -->