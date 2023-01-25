<?php

require_once "model.class.php";
require_once "page_logement.class.php";


class logementManager extends Model{
    private $logements;

    Public function __construct(){

    }

    public function ajoutLogement($logement){
        $this->logements[] = $logement;
    }

    public function getLogements(){
        return $this->logements;
    }
    public function chargementLogements(){
        $req=$this->getBdd()->prepare("SELECT * FROM page_logement ORDER BY id_logement DESC");
        $req->execute();
        $logements = $req->fetchAll(PDO:: FETCH_ASSOC);
        $req->closeCursor();

        foreach ($logements as $logement){
            $l = new logement($logement["id_logement"],$logement["image_seller"],$logement["titre"],$logement["locale"],$logement["prix"],$logement["surface_total"],$logement["type"],$logement["nb_piece"],$logement["surface"],$logement["description"],$logement["name_seller"],$logement["phone_seller"],$logement["email_seller"]);
            $this->ajoutLogement($l);
        }
    }
    
}
