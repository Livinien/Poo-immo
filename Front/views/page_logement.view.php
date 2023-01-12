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


    <title>IMMOBELLO - Page Logement</title>

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
                            <a class="nav-link active text-light fw-bold" aria-current="page" href="profil.php">Mon
                                Compte</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active text-light fw-bold" aria-current="page"
                                href="agence.php">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <!-- CARROUSEL -->

    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
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
                <img src="../public/assets/images/Villa_sur_la_cote.jpg" class="contain d-block w-100"
                    alt="Images de logements">

                <div class="carousel-caption carousel d-none d-md-block">
                    <h2 class="fw-bold">Villa de Luxe</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/int_sal_b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Villa sur la Côte</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/int_salon.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison du Lac</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/int_cuis.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison Addams</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>


    <!-- CARTE DU LOGEMENT -->

    <div class="card-container_descript col ms-5 mt-5">
        <div class="card-body_modif col w-50">
            <h2 class="card-title fw-bold">Villa de Luxe</h2>
            <h4 class="card-subtitle mt-3 pt-2">Surface : 3500 m2 au total</h4>
            <h4 class="card-subtitle mt-3 mb-3"> Prix : 1 000 000 €</h4>
        </div>


        <!-- BODY PAGE LOGEMENT CARACTERISTIQUES  -->
        <div class="card-body_modif w-100 pt-5 ">
            <h2 class="card-title fw-bold ">Caractéristiques</h2>
            <h4 class="card-subtitle mt-3 pt-2">Type de logement : Villa, Maison</h4>
            <h4 class="card-subtitle mt-3 mb-3"> Nombre de Pièces : T6 </h4>
            <h4 class="card-subtitle mt-3 mb-3"> Surface : 200 m2 surface intérieur avec un jardin de 3000 m2 + piscine.
            </h4>
            <h4 class="card-subtitle mt-3 mb-3"> Localisation : Nice, FRANCE </h4>
        </div>



        <!-- BODY DESCRIPTION CARD -->

        <div class="card-body_modif col w-75 pt-5 pb-5">
            <h2 class="card-title fw-bold">Description</h2>
            <h4 class="card-subtitle mt-3 pt-2">Villa face à la mer avec piscine, se situant sur les hauteurs. Coin
                tranquille
                sans vis-à-vis situé dans la résidence huppé de Nice.
            </h4>
            <h4 class="card-subtitle mt-3 mb-3"> A proximité des commerces, de la plage, du centre-ville, etc... </h4>
        </div>

    </div>

    </div>



    <!-- MODIFICATIONS LOGEMENT MODAL UN LOGEMENT  -->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modifier un logement </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>



                <!-- MODIFICATIONS LOGEMENT MODAL - BODY TITRE  -->

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="card-body col-md-5 m-3 rounded-5">
                                <div class="">
                                    <h3 class="text-center mb-4 mt-4">Titre</h3>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Titre de
                                            logement: </label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface
                                            Total du
                                            logement: </label>
                                        <input type="name" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Prix du
                                            logement:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput3">
                                    </div>
                                </div>
                            </div>


                            <!-- MODIFICATIONS LOGEMENT MODAL - BODY CARACTERISTIQUES  -->

                            <div class="card-body col-md-5 m-3 rounded-5">
                                <div class="">
                                    <h3 class="text-center mb-4 mt-4">Caractéristiques</h3>
                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Type de
                                            logement:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Nombre
                                            de
                                            Pièces: </label>
                                        <input type="name" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class=" container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface
                                            du
                                            logement:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1"
                                            class="form-label-modal mb-2">Localication:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput3">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- MODIFICATIONS LOGEMENT MODAL - BODY DESCRIPTION  -->

                        <div class="row">
                            <div class="card-body col-md-5 m-3 rounded-5">
                                <h3 class="text-center mb-4 mt-4">Description</h3>
                                <div class="container-fluid mb-3 ms-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="container-fluid mb-3 ms-4">
                                    <label class="input-text" for="inputFile02">Importer image</label>
                                    <input type="file" class="form-control" id="inputFile02">
                                </div>
                            </div>



                            <!-- MODIFICATIONS LOGEMENT MODAL - BODY CONTACT  -->

                            <div class="card-body col-md-5 m-3 rounded-5">
                                <div class=" border-1">
                                    <h3 class="text-center mb-4 mt-4">Contacter</h3>
                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal">Nom</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput2" class="form-label-modal">Téléphone</label>
                                        <input type="tel" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput3" class="form-label-modal">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit"
                        class="button-modif_logement_modal btn btn-success fw-bold mt-5">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- APPARITION MODAL - SUPPRIMER UN LOGEMENT -->

    <div class="modal fade pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un logement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fw-bol">
                    Êtes-vous sur de supprimer votre logement ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger fw-bold">Supprimer</button>
                </div>
            </div>
        </div>
    </div>




    <!-- MODAL POUR CONTACTER LE VENDEUR -->

    <div>
        <div class="modal fade" id="modal-contact-vendeur" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Coordonnées du Vendeur</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label contact-vendeur-label">Nom</label>
                            <input type="name" class="form-control contact-vendeur-input" id="exampleInputEmail1"
                                aria-describedby="NomHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label contact-vendeur-label">Téléphone</label>
                            <input type="tel" class="form-control contact-vendeur-input" id="exampleInputEmail1"
                                aria-describedby="TelephoneHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label contact-vendeur-label">Email</label>
                            <input type="email" class="form-control contact-vendeur-input" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="contact mb-3">
                            <label for="textarea" class="form-label contact-vendeur-label">Commentaire</label>
                            <textarea class="form-control contact-vendeur-input" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success fw-bold">Contacter</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- BOUTONS MODIFICATIONS ET SUPPRIMER DES MODALS -->
        <div>
            <div class="row">
                <div class="modal-footer_logement text-center mb-5 mt-5">
                    <button type="button" class="btn btn-success button-vendeur fw-bold mt-5" data-bs-toggle="modal"
                        data-bs-target="#modal-contact-vendeur">
                        Contacter le Vendeur
                    </button>

                    <button type="button" class="btn btn-warning button-modifs fw-bold text-white me-5 ms-5 mt-5"
                        data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                        Modifications
                    </button>

                    <button type="submit"
                        class="button-supp_logement_modal btn btn-danger button-supprimer fw-bold mt-5"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer l'annonce
                    </button>
                </div>
            </div>
        </div>
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