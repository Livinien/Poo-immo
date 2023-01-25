<?php 

class inscription {
    private $id_inscription;
    private $name_inscription;
    private $email_inscription;
    private $mdp_inscription;
    private $mdp2_inscription;

    public function __construct($id_inscription, $name_inscription, $email_inscription, $mdp_inscription, $mdp2_inscription)
    {
        $this->id_inscription=$id_inscription;
        $this->name_inscription=$name_inscription;
        $this->email_inscription=$email_inscription;
        $this->mdp_inscription=$mdp_inscription;
        $this->mdp2_inscription=$mdp2_inscription;
        
    }
    public function getId_inscription(){return $this->id_inscription;}
    public function setId_inscription($id_inscription){$this->id_inscription= $id_inscription;}

    public function getName_inscription(){return $this->name_inscription;}
    public function setName_inscription($name_inscription){$this->name_inscription = $name_inscription;}

    public function getEmail_inscription(){return $this->email_inscription;}
    public function setEmail_inscription($email_inscription){$this->email_inscription = $email_inscription;}

    public function getMdp_inscription(){return $this->mdp_inscription;}
    public function setMdp_inscription($mdp_inscription){$this->mdp_inscription = $mdp_inscription;}

    public function getMdp2_inscription(){return $this->mdp2_inscription;}
    public function setMdp2_inscription($mdp2_inscription){$this->mdp_inscription = $mdp2_inscription;}

}


?>