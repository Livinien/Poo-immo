<?php 

class seller{
    private $id_seller;
    private $name_seller;
    private $phone_seller;
    private $email_seller;

    public function __construct($name_seller, $phone_seller, $email_seller)
    {
        $this->id_seller=$id_seller;
        $this->name_seller=$name_seller;
        $this->phone_seller=$phone_seller;
        $this->email_seller=$email_seller;
        
    }

    public function getId_seller(){return $this->id_seller;}
    public function setId_seller($id_seller){$this->id_seller = $id_seller;}

    public function getName_seller(){return $this->name_seller;}
    public function setName_seller($name_seller){$this->name_seller = $name_seller;}

    public function getPhone_seller(){return $this->phone_seller;}
    public function setPhone_seller($phone_seller){$this->phone_seller = $phone_seller;}

    public function getEmail_seller(){return $this->email_seller;}
    public function setEmail_seller($email_seller){$this->email_seller = $email_seller;}

}


?>