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

    <div class="formulaire-profil d-flex justify-content-center">
        <form class="form-profil text-center">
            <img src="..." class="img-fluid" alt="Photo">

            <div class="mt-4 row d-flex justify-content-center">
                <label for="prénom" class="form-label">Prénom</label>
                <input type="text" class="form-control">
            </div>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control">
            </div>
            <div class="mt-4 row row d-flex justify-content-center">
                <label for="number" class="form-label">Téléphone</label>
                <input type="number" class="form-control">
            </div>

            <div class="mt-4 row d-flex justify-content-center">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control">
            </div>

            <div class=" mt-4 row row d-flex justify-content-center">
                <label for="password1" class="form-label">Mot de Passe</label>
                <input type="password" class="form-control">
            </div>





            <!-- Modal -->
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


            <div class="m-4 text-center">
                <button type="submit" class="button-register btn btn-success mt-5">Enregistrer</button>
                <!-- Button trigger modal -->
                <button type="button" class="button-delete btn btn-danger mt-5 " data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Supprimer mon Compte</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>