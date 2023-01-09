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


    <title>Immobello - Accueil</title>

</head>

<body>

    <!-- HEADER - NAVBAR -->

    <nav class="navbar p-3 bg-dark bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="./client.php">IMMOBELLO</a>

            <form class="d-flex">
                <a href="inscription_front.php" class="btn btn-danger register-login" type="submit">Inscription</a>
                <a href="connexion_front.php" class="btn btn-danger ms-3 register-login" type="submit">Connexion</a>
                
                <!-- Button trigger modal DEPOSER UN LOGEMENT -->

                

                <!-- Modal AJOUT DU LOGEMENT-->
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">Ajouter un logement: </h1>
                                
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body bg-dark-subtle">

                                <!--BODY TITRE  -->
                        <div class="row bg-grey justify-content-evenly mb-3">
                            <div class="col-md-5 border border-info  bg-info-subtle">
                                
                                <div class=""><h3 class="text-center mb-4 mt-4">Titre</h3>
                                    <div class="container-fluid width:100% mb-3 ms-5">   
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Titre de logement: </label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Titre">
                                    </div> 

                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface Total du logement: </label>
                                        <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="Surface Total">
                                    </div>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Prix du logement:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput3" placeholder="Prix">
                                    </div>
                                </div>
                            </div>
                            <!--  BODY CARACTERISTIQUE  -->
                            
                            <div class="col-md-5 border border-info  bg-info-subtle">
                                
                            <div class=""><h3 class="text-center mb-4 mt-4">Caractéristiques</h3>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Type de logement:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                                    </div>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Nombre de Pièces: </label>
                                        <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="Nombre de Pièces">
                                    </div>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface du logement:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="Surface">
                                    </div>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label for="exampleFormControlInput1" class="form-label-modal mb-2">Localication:</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput3" placeholder="Localication">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  BODY DESCRIPTION  -->
                        <div class="row justify-content-evenly">
                            <div class="col-md-5 border border-info  bg-info-subtle">
                                <div class=" border-1"><h3 class="text-center mb-4 mt-4">Description</h3>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                    </div>
                                    <div class="container-fluid width:100% mb-3 ms-5">    
                                        <label class="input-text" for="inputFile02">Importer image</label>
                                        <input type="file" class="form-control" id="inputFile02">
                                    </div>
                                
                                </div>
                            </div>
                        
                    <!--  BODY CONTACT  -->

                            <div class="col-md-5  border border-info  bg-info-subtle">
                                    <div class=" border-1"><h3 class="text-center mb-4 mt-4">Contacter</h3>
                                        <div class="container-fluid width:100% mb-3 ms-5">    
                                            <label for="exampleFormControlInput1" class="form-label-modal">Nom</label>
                                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                                        </div>
                                        <div class="container-fluid width:100% mb-3 ms-5">    
                                            <label for="exampleFormControlInput2" class="form-label-modal">Téléphone</label>
                                            <input type="tel" class="form-control" id="exampleFormControlInput2" placeholder="Téléphone">
                                        </div>
                                        <div class="container-fluid width:100% mb-3 ms-5">    
                                            <label for="exampleFormControlInput3" class="form-label-modal">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                            </div>







                            
                            <!-- Modal -->
                            <div class="modal fade pt-5" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                                aria-hidden="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel2">Supprimer un logement</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body fw-bol">
                                            Êtes-vous sur de supprimer un logement ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                
                        <div class="modal-footer">
                                
                                <!-- Button trigger modal -->
                            <button type="button" class="button-delete_modal btn btn-danger mt-5 " data-bs-toggle="modal2"
                                data-bs-target="#exampleModal2">Supprimer un logement</button>
                                
                            <button type="button" class="btn btn-secondary mt-5" data-bs-dismiss="modal2">Close</button>
                            <button type="submit" class="button-register_modal btn btn-success mt-5">Enregistrer</button>
                                
                        </div>
                    
                        <!-- refaire -->
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Show a second modal and hide this one with the button below.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Hide this modal and show the first with the button below.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>





                </div>
                
            </form>
        </div>
    </nav>


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
                <img src="./assets/images/Villa_de_luxe.jpg" class="contain d-block w-100" alt="Images de logements">
                <div class="carousel-caption carousel d-none d-md-block">
                    <h2>Villa de Luxe</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./assets/images/Villa_sur_la_cote.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Villa sur la Côte</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./assets/images/Maison_du_lac.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Maison du Lac</h2>
                    <p class="carousel-subtitle">Villa en face de la mer avec vue depuis la piscine.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./assets/images/Maison_Addams.jpg" class="d-block w-100" alt="...">
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

    <div class="container text-center">
        <h2 class="logements mt-5">Nos Logements</h2>
        <div class="row row-cols-4 mt-5">
            <div class="col mb-5">
                <div class="card">
                    <img src="./assets/images/Villa_sur_la_cote.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/images/Villa_de_luxe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/images/Maison_du_lac.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Villa sur la Côte</h2>
                        <h4 class="card-subtitle mt-3">Marseille, FRANCE</h4>
                        <h4 class="card-subtitle mt-3 mb-3">700 000 €</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/images/Manoir_du_duc.jpg" class="card-img-top" alt="...">
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


    <!-- FOOTER -->

    <div class="d-flex flex-column justify-content-evenly bg-dark bg-gradient text-light p-4">
        <div class="d-flex justify-content-between">
            <div class="links-footer ms-5">
                <h4>L'entreprise</h4>
                <a href="#">Qui sommes-nous ?</a><br>
                <a href="#">Nous Contacter</a><br>
                <a href="#">Nous Recrutons</a>
            </div>

            <div class="links-footer">
                <h4>Nos Applications</h4>
                <a href="#">Découvrez nos applications</a><br>
                <a href="#"><i class="bi bi-apple logo-apple"></i></a>
                <a class="ms-2" href=""><i class="bi bi-android2 logo-android"></i></a>
            </div>

            <div class="links-footer">
                <h4>Services Pro</h4>
                <a href="#">Tous nos services pro</a><br>
                <a href="#">Accès client</a><br>
                <a href="#">Mes annonces sur Immobello</a>
            </div>

            <div class="links-footer me-5">
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