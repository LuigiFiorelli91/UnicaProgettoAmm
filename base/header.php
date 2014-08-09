<?php
    include_once("class/Categoria.php");
    include_once("class/ListCategorie.php");
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $G_TITLE." - ".$G_title ?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"> <!-- Css generale -->
        <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen"> <!-- Css del menù -->
        <script src="js/script.js"></script>
        <script src="js/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <div id="divGen"> <!-- Finisce nel footer -->
            <div id="divHeader">
                <center><a href="?page=home"><img id="logo" src="img/logo1.png"></a></center>
            </div>
            <div id="divMenu" >
                <!--
                <ul class="nav">
                    
                    <li><input class="searchBar"><input type="button" class="searchButton" value="Search"></li>
                    <li><a href="?page=account">Ciao, accedi<br>Account</a></li>
                    <li><a href="?page=account">Carrello<br>0 oggetti</a></li>
                    <li><a href="?page=info">Info</a></li>
                </ul>
                -->
                <div class="menu menuSx">
                     <!--<form href="?page=search">-->
                        <select id="searchCategoria" class="searchCategoria" selected=0>
                            <option value='-1'>All</option>
                            <?php 
                                $n=$G_categorie->getSize();
                                $G_categorie->reset();
                                for($i=0;$i<$n;$i++){
                                    $cat = $G_categorie->getNextElement();
                                    echo "<option value='".$cat->getId()."' >".$cat->getNome()."</option>";
                                    //echo $cat->getId();
                                }
                            ?>
                        </select>
                     <input type="text" id="searchBar" class="searchBar" name="searchBar" <?php echo 'value="'.$G_search.'"' ?> >
                        <input type="button" class="searchButton" value="Search" onclick="doFilterSearch()">
                     <!--</form>-->
                </div>
                <div class="menu menuSx"><a href="?page=account">Ciao, accedi<br>Account</a></div>
                <div class="menu menuSx"><a href="?page=account">Carrello<br>0 oggetti</a></div>
                <div class="menu menuDx"><a href="?page=info">Info</a></div>
            </div>
            <div id="divCont"> <!-- Finisce nel footer -->
                
                <!-- Contenuto della pagina -->