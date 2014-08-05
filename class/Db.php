<?php

/**
 * Description of Db
 *
 * @author Luigi Fiorelli
 */
class Db {
    
    public static $ip = "127.0.0.1";
    public static $user = "root";
    public static $password = "";
    public static $database = "shopping";
    
    /*
    public function connect(){
        $mysqli->connect($ip, $user, $password, $database);
        $mysqli->connect(Db::$ip, Db::$user, Db::$password, Db::$database);
    }
    
    public function close(){
        $mysqli->close();
    }

    */
}

?>