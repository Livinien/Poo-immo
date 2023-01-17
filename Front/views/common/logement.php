<!-- TABLEAU DE DONNEES POUR UN AJOUT DE CARD-->
<?php

require_once "../logementManager.class.php";
require_once "../page_logement.class.php";

$l1 = new Logement(1,"villa de luxe",32800,3000000,"T6",5,1000,"isere, France","Chalet_des_bois","Maison","Villa_de_luxe.jpg","07.12.13.14.15","toto@gmail.com");
$l2 = new Logement(2,"villa de luxe",22800,500000,"T4",3,1000,"sassenage, France","Chalet_des_bois","Maison","Villa_de_luxe.jpg","07.12.13.14.15","toto@gmail.com");
$l3 = new Logement(3,"villa de luxe",32800,3000000,"T5",4,1000,"meylan, France","Chalet_des_bois","Maison","Villa_de_luxe.jpg","07.12.13.14.15","toto@gmail.com");
$l4 = new Logement(4,"villa de chalet",3280,30000,"T3",2,1000,"villard de land, France","Chalet_des_bois","Maison","Villa_de_luxe.jpg","07.12.13.14.15","toto@gmail.com");

require_once "../logementManager.class.php";
$logementManager = new logementManager;
$logementManager -> ajoutLogement($l1);
$logementManager -> ajoutLogement($l2);
$logementManager -> ajoutLogement($l3);
$logementManager -> ajoutLogement($l4);


$logementManager->chargementLogements();

ob_start();

?>                
                           

<?php 
$logements = $logementManager->getLogements();
        
$req=$this->getBdd()->prepare("SELECT image_seller, titre, locale, prix FROM immobello");
$req->execute();
            
$logements = $req->fetchAll(PDO:: FETCH_ASSOC);
foreach($logements as $logement) : ?>
<div class="col">
    <div class="card mt-5">
                    
        <img src="public/assets/Images/" class="card-img-top" alt="..." <?=$logement['image_seller'] ?> >


            <div class="card-body">
                <h2 class="card-title" <?php $logements[$i]->getTitre() ?>></h2>
                <h4 class="card-subtitle mt-3"<?php $logements[$i]->getLocale() ?>></h4>
                <h4 class="card-subtitle mt-3 mb-3" <?php $logements[$i]->getPrix() ?>></h4>
            </div>
        </div>
        <div class="w-25">

            <div class="card-body">
                <h2 class="card-title"><?= $logement['titre'] ?></h2>
                <h4 class="card-subtitle mt-3"><?= $logement['locale']  ?></h4>
                <h4 class="card-subtitle mt-3 mb-3"><?= $logement['prix']  ?></h4>
            </div>
        </div>          
    </div>
</div>

<?php
    $content=ob_get_clean();
    $titre="Maison";
    require "template2.php";
?>

   
<?php

require_once "../page_logement.class.php";
$logementManager = new logementManager;
$logementManager->chargementLogements();

ob_start();
?>
    <form action="formaction" name="" method="post" target="_self">
        <button type="submit"
             class="button-register_modal btn btn-success mt-5 fw-bold">Enregistrer</button>
    </form>
<?php
    $content=ob_get_clean();
    $titre="Maison";
    require "template2.php";
?>