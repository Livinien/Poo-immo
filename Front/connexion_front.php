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

    <title>IMMOBELLO - Connexion</title>


</head>

<body>

    <div class="formulaire d-flex justify-content-center">
        <form class="form text-center">
            <h1 class="title-connexion text-center">Connexion</h1>

            <div class="mt-5 row d-flex justify-content-center">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mt-5 row row d-flex justify-content-center">
                <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>


            <div class="m-5 text-center">
                <button type="submit" class="button-connexion btn btn-success">Connexion</button><br>

                <div class="mt-4 text-center">
                    <span class="link-inscription">Pas encore de compte ? <a href="#">S'inscrire</a></span>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>