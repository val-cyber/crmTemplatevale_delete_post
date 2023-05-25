<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once("db.php");

class Config{

    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    private $ingles;
    private $ser;
    private $especialidad;

    protected $dbCnx;

    public function __construct($id=0,$nombres="",$direccion="",$logros="", $ingles="", $ser="", $especialidad=""){
       $this-> id= $id;
       $this-> nombres= $nombres;
       $this-> direccion= $direccion; 
       $this-> logros= $logros;
       $this-> ingles= $ingles;
       $this-> ser= $ser;
       $this-> especialidad= $especialidad;
       $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getDirecion(){
        return $this->direccion;
    }

    public function setLogros($logros){
        $this->logros = $logros;
    }

    public function getLogros(){
        return $this->logros;
    }

    public function setIngles($ingles){
        $this->ingles=$ingles;
    }
    public function getIngles(){
        return $this->ingles;
    }


    public function setSer($ser){
        $this->ser=$ser;
    }
    public function getSer(){
        return $this->ser;
    }


    public function setEspecialidad($especialidad){
        $this->especialidad=$especialidad;
    }
    public function getEspecialidad(){
        return $this->especialidad;
    }


    public function insertData(){
        try {
            $stm = $this -> dbCnx -> prepare("INSERT INTO campers(nombres, direccion, logros, ingles, ser, especialidad) values(?,?,?,?,?,?)");
            $stm -> execute ([$this->nombres, $this->direccion, $this->logros, $this->ingles, $this->ser, $this->especialidad]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function obtainAll(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * from campers");
            $stm-> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(){
        try {
            $stm= $this-> dbCnx->prepare("DELETE FROM campers WHERE id=?");
            $stm->execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('registro eliminado');.document.location='estudiantes.php'</script>";
        } catch (Exception  $e) {
           return  $e->getMessage();
        }
    }
}
?>