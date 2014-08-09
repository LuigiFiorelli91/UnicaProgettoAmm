<?php
include_once("class/Db.php");
/**
 * Description of SottoCategoria
 *
 * @author Luigi
 */
class SottoCategoria {
    
    private $id;
    private $nome;
    private $desc;
    
    public function __construct($idSupCat) {
        $this->load($idSupCat);
    }
    
    public function load($idSupCat){
        $mysqli = new mysqli();
        $mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
        
        $query = "select * from sottoCategoria where categoria = ".$idSupCat;
        $result = $mysqli->query($query);
        $row = $result->fetch_array();
        $this->id = $row["id_s"];
        $this->nome = $row["nome"];
        $this->desc = $row["descrizione"];
        
        $mysqli->close();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getDescrizione(){
        return $this->desc;
    }
}


?>