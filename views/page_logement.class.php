<?php 


class Logement{
    private $id;
    private $titre;
    private $surface_total;
    private $prix;
    private $type;
    private $nb_piece;
    private $surface;
    private $locale;
    private $image_seller;
    private $description;
    private $name_seller;
    private $phone_seller;
    private $email_seller;
   

    public function __construct($id, $titre, $surface_total, $prix, $type, $nb_piece, $surface, $locale, $image_seller, $description, $name_seller, $phone_seller, $email_seller){
        $this->id=$id;
        $this->titre=$titre;
        $this->surface_total=$surface_total;
        $this->prix=$prix;
        $this->type=$type;
        $this->nb_piece=$nb_piece;
        $this->surface=$surface;
        $this->locale=$locale;
        $this->image_seller=$image_seller;
        $this->description=$description;
        $this->name_seller=$name_seller;
        $this->phone_seller=$phone_seller;
        $this->email_seller=$email_seller;
        
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre = $titre;}

    public function getSurface_total(){return $this->surface_total;}
    public function setSurface_total($surface_total){$this->surface_total = $surface_total;}

    public function getPrix(){return $this->prix;}
    public function setPrix($prix){$this->prix = $prix;}

    public function getType(){return $this->type;}
    public function setType($type){$this->type = $type;}

    public function getNb_piece(){return $this->nb_piece;}
    public function setNb_piece($nb_piece){$this->nb_piece = $nb_piece;}

    public function getSurface(){return $this->surface;}
    public function setSurface($surface){$this->surface = $surface;}

    public function getLocale(){return $this->locale;}
    public function setLocale($locale){$this->locale = $locale;}

    public function getImage_seller(){return $this->image_seller;}
    public function setImage_seller($image_seller){$this->image_seller = $image_seller;}

    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;}

    public function getName_seller(){return $this->name_seller;}
    public function setName_seller($name_seller){$this->name_seller = $name_seller;}

    public function getPhone_seller(){return $this->phone_seller;}
    public function setPhone_seller($phone_seller){$this->phone_seller = $phone_seller;}

    public function getEmail_seller(){return $this->email_seller;}
    public function setEmail_seller($email_seller){$this->email_seller = $email_seller;}

    
}


?>