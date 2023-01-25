

        <!-- MODAL POUR AJOUTER UN LOGEMENT -->
        
        <!-- Button trigger modal DEPOSER UN LOGEMENT            
                    Modal AJOUT DU LOGEMENT-->
<?php ob_start(); ?>     
        <li class="nav-item">
    <!--<a href="nav-link" name="template2.php">-->
        <button href="nav-link" name="button" type="submit" class="nav-link text-light fw-bold text-decoration-none btn btn-dark p-2"
            data-bs-target="#exampleModalToggle" data-bs-toggle="modal" value="Button"> Déposer une
            annonce</button>
     <!--</a>-->

</li>

        <?php
    $titre="agence";
    //$content = "coucou"; 
    $content=ob_get_clean();
    require "common/template2.php";
   
    ?>


<?= require "common/header2.php";?>

    <!-- FOOTER -->
    
<?= require "common/footer.php"; ?>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter un logement </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>



                    <div class="modal-body">

                        <!-- MODAL TITRE  -->

                        <div class="container" id="#modal">
                            <div class="row">
                                <div class="card-body col-md-5 m-3 rounded-5">
                                    <div class="">
                                        <h3 class="text-center m-4 mb-4 mt-4">Titre</h3>
                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1" class="form-label-modal mb-2">Titre de
                                                logement </label>
                                            <input name="title" type="name" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface
                                                Total du logement: </label>
                                            <input name="surface" type="name" class="form-control" id="exampleFormControlInput2">
                                        </div>
                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1" class="form-label-modal mb-2">Prix du
                                                logement:</label>
                                            <input name="prix" type="name" class="form-control" id="exampleFormControlInput3">
                                        </div>
                                    </div>
                                </div>



                                <!--  MODAL CARACTERISTIQUES  -->

                                <div class="card-body col-md-5 rounded-5 m-3 ">
                                    <div class="">
                                        <h3 class="text-center mb-4 mt-4">Caractéristiques</h3>
                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1" class="form-label-modal mb-2">Type
                                                de
                                                logement:</label>
                                            <input name="type" type="name" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1" class="form-label-modal mb-2">Nombre
                                                de
                                                Pièces: </label>
                                            <input name="nb_piece" type="name" class="form-control" id="exampleFormControlInput2">
                                        </div>
                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1" class="form-label-modal mb-2">Surface
                                                du
                                                logement:</label>
                                            <input name="surface" type="name" class="form-control" id="exampleFormControlInput2">
                                        </div>
                                        <div class="container-fluid mb-3 ms-4">
                                            <label for="exampleFormControlInput1"
                                                class="form-label-modal mb-2">Localisation:</label>
                                            <input name="localisation" type="name" class="form-control" id="exampleFormControlInput3">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!--  MODAL DESCRIPTION  -->

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
                                        <input name="iamge_seller" type="file" class="form-control" id="inputFile02">
                                    </div>
                                </div>



                                <!--  MODAL CONTACT  -->

                                <div class="card-body col-md-5 m-3 rounded-5">
                                    <h3 class="text-center mb-4 mt-4">Contacter</h3>
                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput1" class="form-label-modal">Nom</label>
                                        <input type="name_seller" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput2" class="form-label-modal">Téléphone</label>
                                        <input type="phone_seller" class="form-control" id="exampleFormControlInput2">
                                    </div>
                                    <div class="container-fluid mb-3 ms-4">
                                        <label for="exampleFormControlInput3" class="form-label-modal">Email</label>
                                        <input type="email_seller" class="form-control" id="exampleFormControlInput3">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">    
                        <?php
                            if(array_key_exists('button', $_POST)) {button(); }?>

                        <?php ob_start(); ?>
                       <button type="submit"
                            class="button-register_modal btn btn-success mt-5 fw-bold">Enregistrer</button>
                        
                        
               
                
                </div>
            </div>
        </div>
    </nav> 