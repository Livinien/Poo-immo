<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">


    <title>Immobello - Accueil</title>

</head>

<body>

    <!-- HEADER - NAVBAR -->

    <nav class="navbar p-3 bg-dark bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">IMMOBELLO</a>
            <form class="d-flex">
                <button class="btn btn-danger register-login" type="submit">Inscription</button>
                <button class="btn btn-danger ms-3 register-login" type="submit">Connexion</button>
            </form>
        </div>
    </nav>


    <!-- CARROUSEL -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" carousel-item active data-bs-interval="100">
            <button type=" button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 1"></button>

        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/Villa_de_luxe.jpg" class="contain d-block w-100" alt="Images de logements">
                <div class="carousel-caption carousel d-none d-md-block">
                    <h2>Villa de Luxe</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../images/Villa_sur_la_cote.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Villa sur la Côte</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../images/Maison_du_lac.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison du Lac</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../images/Maison_Addams.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison Addams</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>
        </div>



        <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- CARTE DES LOGEMENTS -->

    <div class="container text-center">
        <h2 class="logements mt-5">Nos Logements</h2>
        <div class="row row-cols-4 mt-5">
            <div class="col mb-5">
                <div class="card">
                    <img src="../images/Villa_sur_la_cote.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../images/Villa_de_luxe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../images/Maison_du_lac.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../images/Manoir_du_duc.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <div class=" d-flex flex-column justify-content-evenly bg-dark bg-gradient text-light p-4">
        <div class="d-flex justify-content-between">
            <div class="links-footer ms-5">
                <h4>L'entreprise</h4>
                <a href="#">Qui sommes-nous ?</a><br>
                <a href="#">Nous Contacter</a><br>
                <a href="#">Nous Recrutons</a>
            </div>

            <div class="links-footer">
                <h4>Nos Applications</h4>
                <a href="#">Découvrez nos applications</a><br>
                <a href="#"><i class="bi bi-apple logo-apple"></i></a>
                <a class="ms-2" href=""><i class="bi bi-android2 logo-android"></i></a>
            </div>

            <div class="links-footer">
                <h4>Services Pro</h4>
                <a href="#">Tous nos services pro</a><br>
                <a href="#">Accès client</a><br>
                <a href="#">Mes annonces sur Immobello</a>
            </div>

            <div class="links-footer me-5">
                <h4>A Découvrir</h4>
                <a href="#">Annuaire des professionnels</a><br>
                <a href="#">Tout l'immobilier</a><br>
                <a href="#">Toutes les villes</a><br>
                <a href="#">Tous les départements</a><br>
                <a href="#">Toutes les régions</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>