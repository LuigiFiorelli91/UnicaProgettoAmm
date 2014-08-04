<?php

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $G_TITLE." - ".$G_title ?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"> <!-- Css generale -->
        <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen"> <!-- Css del menù -->
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
                         <input class="searchBar">
                         <input type="button" class="searchButton" value="Search">
                     <!--</form>-->
                </div>
                <div class="menu menuSx"><a href="?page=account">Ciao, accedi<br>Account</a></div>
                <div class="menu menuSx"><a href="?page=account">Carrello<br>0 oggetti</a></div>
                <div class="menu menuDx"><a href="?page=info">Info</a></div>
            </div>
            <div id="divCont"> <!-- Finisce nel footer -->
                
                <!-- Contenuto della pagina -->