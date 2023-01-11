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

    <title>IMMOBELLO - Inscription </title>


</head>

<body>

    <!-- HEADER - NAVBAR -->

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold p-3" href="agence.php">IMMOBELLO</a>
            <button class="navbar-toggler border-light" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon "></span>
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
                                href="connexion_front.php">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- FORMULAIRE D'INSCRIPTION -->

    <div class="formulaire-inscription d-flex justify-content-center">
        <form class="form-inscription text-center">
            <h1 class="title-inscription text-center">Inscription</h1>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="prénom" class="form-label-inscription">Prénom</label>
                <input type="text" class="form-control">
            </div>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="nom" class="form-label-inscription">Nom</label>
                <input type="text" class="form-control">
            </div>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="email" class="form-label-inscription">Email</label>
                <input type="email" class="form-control">
            </div>

            <div class=" mt-4 row row d-flex justify-content-center">
                <label for="password1" class="form-label-inscription">Mot de Passe</label>
                <input type="password" class="form-control">
            </div>

            <div class="mt-4 row row d-flex justify-content-center">
                <label for="password2" class="form-label-inscription">Confirmer votre mot de passe</label>
                <input type="password" class="form-control">
            </div>


            <!-- BOUTON DE VALIDATION DU FORMULAIRE -->

            <div class="m-4 text-center">
                <button type="submit" class="button-inscription btn btn-success">S'inscrire</button><br>

                <div class="mt-4 text-center">
                    <span class="link-connexion">Vous avez déjà un compte ? <a href="connexion_front.php">Se
                            Connecter</a></span>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>