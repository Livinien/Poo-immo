<?php 

require_once("./controllers/MainController.controller.php");
require_once("./models/Visiteur/Visiteur.model.php");


class VisiteurController extends MainController {

    private $visiteurManager;

    
    public function __construct() {
        $this->visiteurManager = new VisiteurManager();
    }
    
    //Propriété "page_css" : tableau permettant d'ajouter des fichiers CSS spécifiques
    //Propriété "page_javascript" : tableau permettant d'ajouter des fichiers JavaScript spécifiques

    // Partie pilotage pour gérer toute la page d'accueil



    
    // ACCUEIL
    
    public function accueil() {

        // Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);

        $data_page = [
            "page_description" => "Accueil",
            "page_title" => "IMMOBELLO - Accueil",
            "view" => "views/Visiteur/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    
    
    
    // CONNEXION
    
    public function connexion() {
        
        $data_page = [
            "page_description" => "Connexion",
            "page_title" => "IMMOBELLO - Connexion",
            "view" => "views/Visiteur/connexion.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }


    
    // INSCRIPTION

    public function inscription() {
        
        $data_page = [
            "page_description" => "Inscription",
            "page_title" => "IMMOBELLO - Inscription",
            "view" => "views/Visiteur/inscription.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    


    // PAGE D'ERREUR

    public function pageErreur($msg) {
        parent:: pageErreur($msg);
    }
}