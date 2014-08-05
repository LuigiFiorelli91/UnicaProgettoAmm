<div class="sidebar sidebar1">
    lolol
    
</div>
<div class="sidebar sidebar2">
    lolol
    
</div>
<div class="content">
    <p>
        <h><?php echo $G_obj->getNome(); ?></h> <?php echo $G_obj->getMarca(); ?>
    </p>
    <p>
        <?php $img = $G_obj->getImmagini(); ?>
        <div class="divImage1">
            <img src="<?php echo $img[0]; ?>" class="img1">
        </div>
        
    </p>
    <p>
        Marca: <?php echo $G_obj->getMarca(); ?><br>
        Prezzo: <?php echo $G_obj->getPrezzo(); ?> €<br>
    </p>
    <p>
        Descrizione: <?php echo $G_obj->getDescrizione(); ?>
    </p>
</div>