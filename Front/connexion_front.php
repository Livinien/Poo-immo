<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/app.css">

    <title>IMMOBELLO - Connexion</title>


</head>

<body>

    <!-- HEADER - NAVBAR -->

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold p-3" href="agence.php">IMMOBELLO</a>
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
                                href="agence.php">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active text-light fw-bold" aria-current="page"
                                href="inscription_front.php">Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <!-- FORMULAIRE DE CONNEXION -->

    <div class="formulaire-connexion d-flex justify-content-center">
        <form class="form-connexion text-center">
            <h1 class="title-connexion text-center">Connexion</h1>

            <div class="mt-5 row d-flex justify-content-center">
                <label for="email" class="form-label-connexion">Email</label>
                <input type="email" class="form-control">
            </div>

            <div class="mt-5 row row d-flex justify-content-center">
                <label for="password" class="form-label-connexion">Mot de Passe</label>
                <input type="password" class="form-control">
            </div>

            <!-- BOUTON DE VALIDATION DU FORMULAIRE -->

            <div class="m-5 text-center">
                <button type="submit" class="button-connexion btn btn-success ">Connexion</button><br>

                <div class="mt-4 text-center">
                    <span class="link-inscription">Pas encore de compte ? <a
                            href="inscription_front.php">S'inscrire</a></span>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>