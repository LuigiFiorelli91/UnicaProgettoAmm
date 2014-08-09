<?php

/**
 * Description of Categoria
 *
 * @author Luigi
 */
include_once("class/Db.php");
class Categoria {
    
    private $nome;
    private $id;
    private $subCat;
    private $size;
    private $n;
    
    public function __construct($id) {
        
        $this->load($id);
    }
    
    public function load($id){
        $this->id = $id;
        $mysqli = new mysqli();
        $mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
        
        $query = "select * from categoria where id_c = ".$id;
        //$query = "select * from categoria where id_c = 1";
        $result = $mysqli->query($query);
        $row = $result->fetch_array();
        $this->nome = $row["nome"];
        
        $this->loadSubCat();
        
        $mysqli->close();
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getId(){
        return $this->id;
    }
    
    private function loadSubCat(){
        
    }
    
    /*Gestione sottocategorie*/
    private function reset(){
        $this->n=0;
    }
    
    private function getSize(){
        return $this->size;
    }
    
    private function getNextElement(){
        if($this->n>=$this->size){
            $this->n = 0;
        }
        $this->n++;
        return $this->subCat[$this->n-1];
    }
    /*Fine gestione sottocategorie*/
    
}
