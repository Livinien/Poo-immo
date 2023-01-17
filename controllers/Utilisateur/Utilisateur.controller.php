<?php 

require_once("./controllers/MainController.controller.php");
require_once("./models/Utilisateur/Utilisateur.model.php");


class UtilisateurController extends MainController {

    private $utilisateurManager;

    
    
    public function __construct() {
        $this->utilisateurManager = new UtilisateurManager();
    }
    
    
    public function validation_connexion($email, $password) {
    
        if($this->utilisateurManager->isCombinaisonValide($email, $password)) {
            if($this->utilisateurManager->isCombinaisonValide($email, $password)) {
                if($this->utilisateurManager->estCompteActive($email)) {
                    Toolbox::ajouterMessageAlerte("Vous êtes maintenant connecté avec l'adresse email de : ".$email."!", Toolbox::COULEUR_VERTE);
                    $_SESSION['profil'] = [
                        "email" => $email,
                    ];
                    header("Location: ".URL."accueil");
                    
                } else {
                    Toolbox::ajouterMessageAlerte("Le compte ".$email." n'a pas été activé", Toolbox::COULEUR_ROUGE);
                    //Renvoyer le mail de validation à l'utilisateur
                    header("Location: ".URL."connexion");
                }
            }
            
        } else {
            Toolbox::ajouterMessageAlerte("La combinaison de l'email et du mot de passe est invalide", Toolbox::COULEUR_ROUGE);
            header("Location: ".URL."connexion");
        }
   }


   public function profil() {
    
        $datas = $this->utilisateurManager->getUserInformation($_SESSION['profil']['connexion']);
        
        $_SESSION['profil']["role"] = $datas['role'];
        
        $data_page = [
            "page_description" => "Mon Compte",
            "page_title" => "IMMOBELLO - Profil",
            "utilisateur" => $datas,
            "view" => "views/Utilisateur/profil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
   }

   
   // DECONNEXION DE L'UTILISATEUR

   public function deconnexion() {
    Toolbox::ajouterMessageAlerte("Vous êtes maintenant déconnecté", Toolbox::COULEUR_VERTE);
    unset($_SESSION['profil']);
    header("Location: ".URL."accueil");
   }


   // VALIDATION DE L'INSCRIPTION

    public function validation_inscription($prenom, $nom, $email, $password) {
        
        if($this->utilisateurManager->verifConnexionDisponible($email)) {
            $passwordCrypte = password_hash($password, PASSWORD_DEFAULT);
            $clef = rand(0, 9999);
            if($this->utilisateurManager->bdInscription($prenom, $nom, $email, $passwordCrypte, $clef)) {
                $this->sendMailValidation($prenom, $email, $clef);
                Toolbox::ajouterMessageAlerte("Votre compte a été crée, un mail de confirmation vous a été envoyé !", Toolbox::COULEUR_VERTE);
                header("Location: ".URL."connexion");
            } else {
                Toolbox::ajouterMessageAlerte("Erreur, lors de l'inscription du compte, recommencez !", Toolbox::COULEUR_ROUGE);
                header("Location: ".URL."inscription");
            }
        } else {
            Toolbox::ajouterMessageAlerte("L'email est déjà utilisé !", Toolbox::COULEUR_ROUGE);
            header("Location: ".URL."inscription");
        }
    }

    
    // ENVOIE D'EMAIL DE CONFIRMATION A L'UTILISATEUR
   
    private function sendMailValidation($prenom, $email, $clef) {
        $urlVerification = URL."validationMail/".$prenom."/".$clef;
        $sujet = "Création du compte sur le site IMMOBELLO";
        $message = "Pour valider votre compte, veuillez cliquer sur le lien suivant ".$urlVerification;
        Toolbox::sendMail($email, $sujet, $message);
    }

    
    // PAGE D'ERREUR

    public function pageErreur($msg) {
        parent:: pageErreur($msg);
    }
}