<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= URL ?>public/assets/css/app.css" rel="stylesheet" />

    <title><?= $page_title; ?></title>

</head>

<body>

    <!-- FORMULAIRE DE CONNEXION -->

    <div class="formulaire-connexion d-flex justify-content-center">

        <form class="form-connexion text-center" method="POST" action="validation_connexion">
            <h1 class="title-connexion text-center fw-bold">Connexion</h1>

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

            <div class="mt-5 row d-flex justify-content-center">
                <label for="email" class="form-label-connexion">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mt-5 row row d-flex justify-content-center">
                <label for="password" class="form-label-connexion">Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>


            <!-- BOUTON DE VALIDATION DU FORMULAIRE -->

            <div class="m-5 text-center">
                <button type="submit" class="button-connexion btn btn-success fw-bold">Connexion</button><br>

                <div class="mt-4 text-center fw-bold">
                    <span class="link-inscription">Pas encore de compte ? <a href="
                            <?= URL ?>inscription">S'inscrire</a></span>
                </div>
            </div>
        </form>
    </div>
</body>

</html>