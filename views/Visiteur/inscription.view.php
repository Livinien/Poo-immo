<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="<?= URL ?>public/assets/css/app.css" rel="stylesheet" />

    <title><?= $page_title; ?></title>

</head>

<body>


    <!-- FORMULAIRE D'INSCRIPTION -->

    <div class="formulaire-inscription d-flex justify-content-center">
        <form class="form-inscription text-center" method="POST" action="validation_inscription">
            <h1 class="title-inscription text-center">Inscription</h1>

            <?php 
                if(!empty($_SESSION['alert'])) {
                    foreach($_SESSION['alert'] as $alert){
                        echo "<div class='alert ". $alert['type'] ."' role='alert'>
                            ".$alert['message']."
                        </div>";
                    }
                    unset($_SESSION['alert']);
                }
            ?>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="prenom" class="form-label-inscription">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="nom" class="form-label-inscription">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="email" class="form-label-inscription">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class=" mt-4 row row d-flex justify-content-center">
                <label for="password" class="form-label-inscription">Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mt-4 row row d-flex justify-content-center">
                <label for="password" class="form-label-inscription">Confirmer votre mot de passe</label>
                <input type="password" class="form-control" id="confirm_password" name=" confirm_password">
            </div>


            <!-- BOUTON DE VALIDATION DU FORMULAIRE -->

            <div class="m-4 text-center">
                <button type="submit" class="button-inscription btn btn-success fw-bold">S'inscrire</button><br>

                <div class="mt-4 text-center fw-bold">
                    <span class="link-connexion">Vous avez déjà un compte ? <a href="<?= URL ?>connexion">Se
                            Connecter</a></span>
                </div>
            </div>
        </form>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>