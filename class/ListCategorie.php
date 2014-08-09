<?php
include_once("Categoria.php");
include_once("Db.php");
/**
 * Description of ListCategorie
 *
 * @author Luigi
 */
class ListCategorie {
    
    private $categorie;
    private $size;
    private $n;
    
    public function __construct() {
        $this->load();
    }
    public function load(){
        $mysqli = new mysqli();
        $mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
        $query = "select * from categoria";
        $result = $mysqli->query($query);
        $this->size=0;
        $this->n = 0;
        while($row = $result->fetch_array()){
            $this->categorie[$this->size] = new Categoria($row["id_c"]);
            $this->size++;
        }
        $mysqli->close();
    }
    
    public function getSize(){
        return $this->size;
    }
    public function reset(){
        $this->n = 0;
        
    }
    public function getNextElement(){
        if($this->n>=$this->size){
            $this->n=0;
        }
        $this->n++;
        return $this->categorie[$this->n-1];
    }
}


?>