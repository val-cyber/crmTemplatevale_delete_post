<?php 

require_once("../Config/Conectar.php");
require_once("../Config/db.php");

class loginUser extends Conectar{

    private $id;
    private $idCamper;
    private $email;
    private $userName;
    private $password;
    
    public function __construct($id=0,$idCamper="",$email="", $userName="", $password="",$dbCnx=""){

        $this-> id= $id;
        $this-> idCamper= $idCamper;
        $this-> email= $email; 
        $this-> userName= $userName;
        $this-> password= $password;
        
        parent::__construct($dbCnx);
     }

     public function setID($id){
        $this->id = $id;
    }

    public function getID(){
        return $this->id;
    }

    public function setIdCamper($idCamper){
        $this->idCamper = $idCamper;
    }

    public function getIdCamper(){
        return $this->idCamper;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setUsername($userName){
        $this->username = $userName;
    }

    public function getUsername(){
        return $this->userName;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }
}


?>