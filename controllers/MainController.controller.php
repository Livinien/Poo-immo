<?php
require_once("controllers/Toolbox.class.php");

// Abtract qui montre que notre classe ne peut pas être instencier par elle-même. 
// Elle ne peut pas avoir d'object et peut être seulement étendu.

abstract class MainController{
    
    protected function genererPage($data){
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    

    // Partie pilotage pour gérer la page d'erreur
    // Protected : cette fonction pourra être redéfini dans chacun des controllers qui seront présent dans Visiteur / Utilisateur / Administrateur
    protected function pageErreur($msg){
        $data_page = [
            "page_description" => "Page permettant de gérer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "./views/erreur.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }
}