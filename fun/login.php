<?php
     
    /*Indica i permessi che hai a disposizione     
     * 0=admin generale
     * 6=utente registrato
     * 9=visitatore
     */
    $G_login["perm"] = 0; 
    $G_login["user"] = "Admin"; /**/
    if($G_login["perm"]<8) {    
        $G_login["login"] = true; /*Indica se sei loggato o meno*/
    } else {
        $G_login["login"] = false;
    }
?>