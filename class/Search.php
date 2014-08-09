<?php
/**
 * Description of Search
 *
 * @author Luigi Fiorelli
 */

include_once("Db.php");
include_once("Prodotto.php");
include_once("fun/stringValidator.php");

class Search {
    
    private $size;
    private $num;
    private $list;
    private $mysqli;
    
    public function __construct($key, $categoria) {
        $this->size = 0;
        $this->num = 0;
        $this->mysqli = new mysqli();
        $this->mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
        $this->search($key, $categoria);
    }
    
    public function search($key, $categoria){
        $keyV = stringValidator($key);
        $categoriaV = stringValidator($categoria);
        if($key != ""){
            $keys = explode(" ", $keyV);
            /*Costruzione query*/
            if($categoriaV!=-1) { //Base della query
                $query = "select oggetto.id_o from sottocategoria, soca_og, oggetto where ( ";
            } else {
                $query = "select oggetto.id_o from oggetto where ( ";
            }
            for($i=0;$i<count($keys);$i++){ //Aggiunta delle key del nome da ricercare
                $query = $query."oggetto.nome like '%".$keys[$i]."%' or ";
            }
            $query = $query." 1 = 2 )";
            
            
            if($categoriaV!=-1) { //Aggiunta della condizione per la scelta della categoria
                $query = $query." and (sottocategoria.categoria = ".$categoriaV." and sottocategoria.id_s = soca_og.id_s and soca_og.id_o = oggetto.id_o)";
            }
            
            $result = $this->mysqli->query($query); //Esecuzione della query
            
             /* Caricamento prodotti */
            $this->size=0;
            if($this->mysqli->errno == 0 and $result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $this->list[$this->size] = new Prodotto();
                    $this->list[$this->size]->load($row["id_o"]);
                    $this->size++;
                }
            }
        }
    }
    public function search2($key, $categoria){
        $keyV = stringValidator($key);
        $categoriaV = stringValidator($categoria);
        $this->list[0] = new Prodotto();
        $this->list[0]->load(1);
        $this->size++;
        
        $this->list[1] = new Prodotto();
        $this->list[1]->load(1);
        $this->size++;
        
        $this->list[2] = new Prodotto();
        $this->list[2]->load(1);
        $this->size++;
    }
    
    public function getSize(){
        return $this->size;
    }
    
    public Function reset(){
        $this->num=0;
    }
    
    public function getNextElement(){
        if($this->num>=$this->size){
            $this->num=0;
        }
        
        $this->num++;
        return $this->list[$this->num-1];
        
    }
}

?>