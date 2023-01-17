<?php 

class connexion{
    private $id_connexion;
    private $email_connexion;
    private $mdp_connexion;

    public function __construct($email_connexion, $mdp_connexion)
    {
        $this->id_connexion=$id_connexion;
        $this->email_connexion=$email_connexion;
        $this->mdp_connexion=$mdp_connexion;
        
    }

    public function getId_connexion(){return $this->id_connexion;}
    public function setId_connexion($id_connexion){$this->id_connexion = $id_connexion;}

    public function getEmail_connexion(){return $this->email_connexion;}
    public function setEmail_connexion($email_connexion){$this->email_connexion = $email_connexion;}

    public function getMdp_connexion(){return $this->mdp_connexion;}
    public function setMdp_connexion($mdp_connexion){$this->mdp_connexion = $mdp_connexion;}

}


?>