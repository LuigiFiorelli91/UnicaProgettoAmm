<?php
    /*
     * Controller dell'applicazione
     */
    include_once("fun/login.php");
    if(isset($request["page"])){
        $G_page = $request["page"];
    } else {
        $G_page = "home";
    }
?>