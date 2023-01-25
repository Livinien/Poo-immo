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

<?= require "common/header2.php"; ?>  
    
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
                <img src="../public/assets/images/Villa_de_luxe.jpg" class="contain d-block w-100"
                    alt="Images de logements">
                <div class="carousel-caption carousel d-none d-md-block">
                    <h2>Villa de Luxe</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/Villa_sur_la_cote.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Villa sur la Côte</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/Maison_du_lac.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison du Lac</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../public/assets/images/Maison_Addams.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison Addams</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>
        </div>


        <!-- BOUTON SUIVANT ET PRECEDENT -->

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
  
<div class="container text-center g-0">
        <h2 class="logements mt-5">Nos Logements</h2>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-md-4">
            <div class="col mb-5">
                <div class="card mt-5">
                    <img src="../public/assets/images/Villa_sur_la_cote.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5">
                    <img src="../public/assets/images/Villa_de_luxe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5">
                    <img src="../public/assets/images/Maison_du_lac.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5 mb-5">
                    <img src="../public/assets/images/Manoir_du_duc.jpg" class="card-img-top" alt="...">
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


    <?= require "common/footer.php"; ?> 
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
                                        <input name="titre" type="name" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface
                                            Total du
                                            logement: </label>
                                        <input name="surface_total" type="name" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Prix du
                                            logement:</label>
                                        <input name="prix" type="name" class="form-control" id="exampleFormControlInput3">
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
                                        <input name="type" type="name" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Nombre
                                            de
                                            Pièces: </label>
                                        <input name="nb_piece" type="name" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class=" container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface
                                            du
                                            logement:</label>
                                        <input name="surface"type="name" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1"
                                            class="form-label-modal mb-2">Localication:</label>
                                        <input name="locale" type="name" class="form-control" id="exampleFormControlInput3">
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
                                        <textarea name="description" class="form-control" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="container-fluid mb-3 ms-4">
                                    <label class="input-text" for="inputFile02">Importer image</label>
                                    <input  name="image_seller" type="file" class="form-control" id="inputFile02">
                                </div>
                            </div>



                            <!-- MODIFICATIONS LOGEMENT MODAL - BODY CONTACT  -->

                            <div class="card-body col-md-5 m-3 rounded-5">
                                <div class=" border-1">
                                    <h3 class="text-center mb-4 mt-4">Contacter</h3>
                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal">Nom</label>
                                        <input name="name_seller" type="name" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput2" class="form-label-modal">Téléphone</label>
                                        <input name="phone_seller" type="tel" class="form-control" id="exampleFormControlInput2">
                                    </div>

                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput3" class="form-label-modal">Email</label>
                                        <input name="email_seller" type="email" class="form-control" id="exampleFormControlInput3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php ob_start(); ?>
                        <!-- TABLEAU DE DONNEES POUR UN AJOUT DE CARD-->
                        <div>
                            <div class="col">
                                <div class="card mt-5">
                                    <img class="card-img-top" >image</img>
                                        <div class="card-body">
                                        <h2 class="card-title">titre</h2>
                                        <h4 class="card-subtitle mt-3">locale</h4>
                                        <h4 class="card-subtitle mt-3 mb-3">prix</h4>
                                        <h4 colspan="2">Actions</h4>
                                    </div>
                                </div>
                            </div>

                            <?php for($i=0; $i<count($logements);$i++) : ?>

                            <div class="col">
                                <div class="card mt-5">
                                    <img src="../public/assets/images/Appartement_T1.jpg" class="card-img-top" alt="..." <?php $logements[$i]->getImage()?> width="20%">
                                        <div class="card-body">
                                        <h2 class="card-title" <?php $logements[$i]->getTitre()?>></h2>
                                        <h4 class="card-subtitle mt-3"<?php $logements[$i]->getLocale()?>></h4>
                                        <h4 class="card-subtitle mt-3 mb-3" <?php $logements[$i]->getPrix()?>></h4>
                                    </div>
                                </div>
                              
                            </div>
                            <?php endfor; ?>
                        </div>

                <div class="modal-footer">
                    <button type="submit"
                        class="button-modif_logement_modal btn btn-success fw-bold mt-5">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>



    <?php
    $content=ob_get_clean();
    $titre="Maison de Ville";
    require "common/template.php"
    ?>


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
                            <input name="name_seller" type="name" class="form-control contact-vendeur-input" id="exampleInputEmail1"
                                aria-describedby="NomHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label contact-vendeur-label">Téléphone</label>
                            <input name="phone_seller" type="tel" class="form-control contact-vendeur-input" id="exampleInputEmail1"
                                aria-describedby="TelephoneHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label contact-vendeur-label">Email</label>
                            <input name="email_seller"type="email" class="form-control contact-vendeur-input" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="contact mb-3">
                            <label for="textarea" class="form-label contact-vendeur-label">Commentaire</label>
                            <textarea name="description"class="form-control contact-vendeur-input" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success fw-bold">Contacter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

        
                            <!-- APPEL DE LA MODAL DE L'AGENCE -->

     