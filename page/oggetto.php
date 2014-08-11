<div class="sidebar sidebar2">
    lolol
    
</div>
<div class="content content2colDx">
    <?php $img = $G_obj->getImmagini(); ?>
    <div class="divImage1">
        <img src="<?php echo $img[0]; ?>" class="img1">
    </div>
    <p>
    <h1><b><?php echo $G_obj->getNome(); ?></b></h1> <?php echo $G_obj->getMarca(); ?>
    </p>
    <p>
        Marca: <?php echo $G_obj->getMarca(); ?><br>
        Prezzo: <?php echo $G_obj->getPrezzo(); ?> €<br>
    </p>
    <p>
        Descrizione: <?php echo $G_obj->getDescrizione(); ?>
    </p>
    <p>
        <input type="text" value="1">
        <input type="button" value="Aggiungi al carrello">
    </p>
</div>