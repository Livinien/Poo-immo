<?php 

    include_once "common/header.php";

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/css/app.css">


    <title>IMMOBELLO - Connexion</title>

</head>

<body>



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
                            href="inscription_front.view.php">S'inscrire</a></span>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>