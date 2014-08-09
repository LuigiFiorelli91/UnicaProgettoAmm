<?php
    /*
     * Controller dell'applicazione
     */
    include_once("config/config.php");
    include_once("fun/login.php");
    include_once("class/ListCategorie.php");
    include_once("class/Categoria.php");
    include_once("class/Db.php");
    
    //Pagina richiesta
    if(isset($_REQUEST["page"])){
        $G_page = $_REQUEST["page"];
    } else {
        $G_page = "home";
    }
    
    //Frase da ricercare
    if(isset($_REQUEST["search"])){
        $G_search = $_REQUEST["search"];
    } else {
        $G_search = "";
    }
    //Categoria selezionata per la ricerca
    if(isset($_REQUEST["cat"])){
        $G_search_cat = $_REQUEST["cat"];
    } else {
        $G_search_cat = "-1";
    }
    
    //Caricamento delle categorie
    $G_categorie = new ListCategorie(); //Caricamento delle categorie
    
    switch($G_page){
        case "home":
            $G_title = "Home";
            include_once("base/header.php");
            include_once("page/home.php");
        break;
        case "info":
            $G_title = "Info";
            include_once("base/header.php");
            include_once("page/info.php");
        break;
        case "search":
            include_once("class/Search.php");
            $G_searched = new Search($G_search,$G_search_cat);
            include_once("base/header.php");
            include_once("page/search.php");
        break;
        case "product":
            include_once("class/Prodotto.php");
            $G_obj_id = $_REQUEST["obj"];
            $G_obj = new Prodotto();
            $G_obj->load($G_obj_id);
            $G_title = $G_obj->getNome();
            include_once("base/header.php");
            include_once("page/oggetto.php");
        break;
        default:
            $G_title = "Errore 404; pagina non trovata";
            include_once("base/header.php");
            include_once("page/404.php");
        break;
    }
    include_once("base/footer.php");
?>