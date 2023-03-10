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

    <title>IMMOBELLO - Profil</title>


</head>

<body>

    <!-- FORMULAIRE DU PROFIL -->

    <div class="formulaire-profil d-flex justify-content-center">
        <form class="form-profil ">
            <div class="text-center">
                <img name="image_profil" src="..." class="img-fluid" alt="Photo">
            </div>
            <div class="formulaire_input mt-4 row d-flex justify-content-center ">
                <label for="prénom" class="form-label_profil g-0">Prénom</label>
                <input type="text" class="form-control_profil">
            </div>

            <div class=" mt-4 row d-flex justify-content-center ">
                <label for="nom" class="form-label_profil g-0">Nom</label>
                <input name="name_profil" type="text" class="form-control_profil">
            </div>
            <div class=" mt-4 row row d-flex justify-content-center">
                <label for="number" class="form-label_profil g-0">Téléphone</label>
                <input name="phone_profil" type="varchar" class="form-control_profil">
            </div>

            <div class=" mt-4 row d-flex justify-content-center">
                <label for="email" class="form-label_profil g-0">Email</label>
                <input name="email_profil" type="email" class="form-control_profil">
            </div>

            <div class=" mt-4 row row d-flex justify-content-center">
                <label for="password1" class="form-label_profil g-0">Mot de Passe</label>
                <input name="mdp_profil" type="password" class="form-control_profil">
            </div>


            <!-- MODAL POUR SUPPRIMER LE COMPTE UTILISATEUR -->

            <div class="modal fade pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer mon Compte</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body fw-bol">
                            Êtes-vous sur de supprimer votre compte ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-4 text-center">
                <button type="submit" class="button-register_profil btn btn-success mt-5">Enregistrer</button>

                <!-- BOUTON SUPPRIMER LE COMPTE UTILISATEUR -->
                <button type="button" class="button-delete_profil btn btn-danger mt-5" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Supprimer mon Compte</button>
            </div>


        </form>
    </div>


    <!-- FOOTER -->

    <div class="d-flex flex-column justify-content-evenly bg-dark bg-gradient text-light p-4">
        <div class="row mx-5">

            <div class="links-footer col mt-5 mx-4 px-4">
                <h4>L'entreprise</h4>
                <a href="#">Qui sommes-nous ?</a><br>
                <a href="#">Nous Contacter</a><br>
                <a href="#">Nous Recrutons</a>
            </div>

            <div class="links-footer col mt-5 mx-4 px-4">
                <h4>Nos Applications</h4>
                <a href="#">Découvrez nos applications</a><br>
                <a href="#"><i class="bi bi-apple logo-apple"></i></a>
                <a class="ms-2" href=""><i class="bi bi-android2 logo-android"></i></a>
            </div>

            <div class="links-footer col mt-5 mx-4 px-4">
                <h4>Services Pro</h4>
                <a href="#">Tous nos services pro</a><br>
                <a href="#">Accès client</a><br>
                <a href="#">Mes annonces sur Immobello</a>
            </div>

            <div class="links-footer col mt-5 mx-4 px-4">
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