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

 
 
    <?php ob_start(); ?>
                      

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
            </div>
        </div>
    </div>



    <?php
    $content=ob_get_clean();
    $titre="Maison de Ville";
    require "common/template.php"
    ?>


    


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
    
<?= require "footer.php;" ?>