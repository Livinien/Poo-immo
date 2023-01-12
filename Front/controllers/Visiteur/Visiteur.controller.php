<?php 

    require_once("./controllers/MainController.controller.php");

    
// Abstract : ma classe ne peut pas être instencié - elle ne peut pas avoir d'objet
    abstract class VisiteurController extends MainController {
        
    //Propriété "page_css" : tableau permettant d'ajouter des fichiers CSS spécifiques
    //Propriété "page_javascript" : tableau permettant d'ajouter des fichiers JavaScript spécifiques
    
    public function accueil(){
        // Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);

        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
    

    public function pageErreur($msg) {
        parent::pageError($msg);
    }

?>