<?php
session_start();

// Chemin URL perttant de toujours pointer sur la racine du site
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

// Controller : piloter toutes les pages du site - Logique du site
require_once("./controllers/Toolbox.class.php");
require_once("./controllers/Securite.class.php");
require_once("./controllers/Visiteur/Visiteur.controller.php");
require_once("./controllers/Utilisateur/Utilisateur.controller.php");
$visiteurController = new VisiteurController();
$utilisateurController = new UtilisateurController();

// Fichiers de routage qui sont demandés
try {
    if(empty($_GET['page'])) {
        $page = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    // Définir le bon canal à aller afficher dans le fichier de controller
    switch($page) {
        case "accueil" : $visiteurController->accueil();
        break;
        case "connexion" : $visiteurController->connexion();
        break;
        case "validation_connexion" : 
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = Securite::secureHTML($_POST['email']);
            $password = Securite::secureHTML($_POST['password']);
            $utilisateurController->validation_connexion($email, $password);
        } else {
            Toolbox::ajouterMessageAlerte("L'email ou le mot de passe n'a pas été renseigné", Toolbox::COULEUR_ROUGE);
            header('Location: '.URL."connexion");
        }
        
        break;
        case "inscription" : $visiteurController->inscription();
        break;
        case "validation_inscription" :
            if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
                // tous les champs sont remplis 
                $prenom = Securite::secureHTML($_POST['prenom']);
                $nom = Securite::secureHTML($_POST['nom']);
                $email = Securite::secureHTML($_POST['email']);
                $password = Securite::secureHTML($_POST['password']);
                $confirm_password = Securite::secureHTML($_POST['confirm_password']);
                
                if($password === $confirm_password) {
                    // On continue

                    $utilisateurController->validation_inscription($prenom, $nom, $email, $password);
                    
                } else {
                    Toolbox::ajouterMessageAlerte("Les mots de passe ne correspondent pas !", Toolbox::COULEUR_ROUGE);
                    header("Location: ".URL."inscription");
                }
                
            
            } else {
                Toolbox::ajouterMessageAlerte("Tous les champs sont obligatoires !", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."inscription");
            }
        
        break;
        case "compte" : 
            if(!Securite::estConnecte()) {
                Toolbox::ajouterMessageAlerte("Veuillez vous connecter !", Toolbox::COULEUR_ROUGE);
                header('Location: '.URL."connexion");
            } else {
                switch($url[1]){
                    case "profil" : $utilisateurController->profil();
                    break;
                    case "deconnexion" : $utilisateurController->deconnexion();
                    break;
                    default : throw new Exception("La page n'existe pas");
                }
            }
        break;
        default : throw new Exception("La page n'existe pas");
    }

    // Gérer les erreurs 
} catch (Exception $e) {
    $visiteurController->pageErreur($e->getMessage());
}