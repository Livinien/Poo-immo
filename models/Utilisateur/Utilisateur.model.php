<?php 

require_once("./models/MainManager.model.php");

class UtilisateurManager extends MainManager {

    // RECUPERER LE MOT DE PASSE DE L'UTILISATEUR

    private function getPasswordUser($email){
        $req = "SELECT password FROM utilisateur WHERE email = :email";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultat['password'];
    }

    
    // VERIFIER LE MOT DE PASSE

    public function isCombinaisonValide($email, $password) {
        $passwordBD = $this->getPasswordUser($email);
        return password_verify($password, $passwordBD);
    }

    public function estCompteActive($email) {
        $req = "SELECT est_valide FROM utilisateur WHERE email = :email";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return ((int)$resultat['est_valide'] === 1);
    }
    

    // RECUPERER LES INFORMATIONS DE L'UTILISATEUR

    public function getUserInformation($email) {
        $req = "SELECT * FROM utilisateur WHERE email = :email";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        print_r($resultat);
        return $resultat;
    }
    
    
    // INSERER DES DONNEES DE L'UTLISATEUR A LA BDD 

    public function bdInscription($prenom, $nom, $email, $passwordCrypte, $clef) {
        $req = "INSERT INTO utilisateur (prenom, nom, email, password, est_valide, role, clef, image) VALUES (:prenom, :nom, :email, :password, 0, 'utilisateur', :clef, '')";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->bindValue(":password", $passwordCrypte, PDO::PARAM_STR);
        $stmt->bindValue(":clef", $clef, PDO::PARAM_INT);
        $stmt->execute();
        $estModifier = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $estModifier;
    }

    
    // VERIFIER SI L'UTILISATEUR EST DEJA EXISTANT 
    
    public function verifConnexionDisponible($email) {
        $utilisateur = $this->getUserInformation($email);
        return empty($utilisateur); 
    }
    
}