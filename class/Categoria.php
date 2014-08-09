<?php

/**
 * Description of Categoria
 *
 * @author Luigi
 */
include_once("class/Db.php");
class Categoria {
    private $mysqli;
    private $nome;
    private $id;
    public function __construct($id) {
        $this->id = $id;
        $this->mysqli = new mysqli();
        $this->mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
        $this->load($id);
    }
    
    public function load($id){
        $query = "select * from categoria where id_c = ".$id;
        //$query = "select * from categoria where id_c = 1";
        $result = $this->mysqli->query($query);
        $row = $result->fetch_array();
        $this->nome = $row["nome"];
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getId(){
        return $this->id;
    }
    
}
