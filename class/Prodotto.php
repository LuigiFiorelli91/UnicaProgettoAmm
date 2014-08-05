<?php
include_once("class/Db.php");
/**
 * Un oggetto del catalogo in vendta
 *
 * @author Luigi Fiorelli
 */
class Prodotto {
    
    private $mysqli;
    private $nome;
    private $marca;
    private $prezzo;
    private $descrizione;
    private $immagini;
    private $categoria; //da fare
    private $sottoCategoria; //da fare
    
    public function __construct(){
        $this->mysqli = new mysqli();
        $this->mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
    }
    
    public function load($obj){
        $query = "select * from oggetto where id_o = '".$obj."'limit 1";
        $result = $this->mysqli->query($query);
        $row = $result->fetch_array();
        $this->nome = $row["nome"];
        $id_marca = $row["marca"];
        $this->prezzo = $row["prezzo"];
        $this->descrizione = $row["descrizione"];
        
        $query = "select * from marca where id_m = ".$id_marca;
        $result = $this->mysqli->query($query);
        $row = $result->fetch_array();
        $this->marca = $row["nome"];
        
        $query = "select * from immagine where id_o = ".$obj;
        $result = $this->mysqli->query($query);
        $c=0;
        while($row = $result->fetch_array()){
            $this->immagini[$c] = $row["link"];
            $c++;
        }
        
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getMarca(){
        return $this->marca;
    }
    
    public function getPrezzo(){
        return $this->prezzo;
    }
    
    public function getDescrizione(){
        return  $this->descrizione;
    }
    
    public function getImmagini(){
        return $this->immagini;
    }
}

?>