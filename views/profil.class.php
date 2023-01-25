<?php 

class profil{
    private $id_profil;
    private $name_profil;
    private $phone_profil;
    private $email_profil;
    private $mdp_profil;
    private $image_profil;

    public function __construct($id_profil, $name_profil, $phone_profil, $email_profil, $mdp_profil, $image_profil)
    {
        $this->id_profil=$id_profil;
        $this->name_profil=$name_profil;
        $this->phone_profil=$phone_profil;
        $this->email_profil=$email_profil;
        $this->mdp_profil=$mdp_profil;
        $this->image_profil=$image_profil;
        
    }

    public function getId_profilt(){return $this->id_profil;}
    public function setId_profil($id_profil){$this->id_profil = $id_profil;}

    public function getName_profil(){return $this->name_profil;}
    public function setName_profil($name_profil){$this->name_profil = $name_profil;}

    public function getPhone_profil(){return $this->phone_profil;}
    public function setPhone_profil($phone_profil){$this->phone_profil = $phone_profil;}

    public function getEmail_profil(){return $this->email_profil;}
    public function setEmail_profil($email_profil){$this->email_profil = $email_profil;}

    public function getMdp_profil(){return $this->mdp_profil;}
    public function setMdp_profil($mdp_profil){$this->mdp_profil = $mdp_profil;}

    public function getImage_profil(){return $this->image_profil;}
    public function setImage_profil($image_profil){$this->image_profil = $image_profil;}

}


?>