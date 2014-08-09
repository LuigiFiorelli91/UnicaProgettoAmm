<?php
    include_once("class/Search.php");
?>
<div class="sidebar sidebar1">
    Filtri:
    
</div>
<div class="sidebar sidebar2">
    lolol
    
</div>
<div class="content">
    <?php 
        $G_searched->reset();
        if($G_searched->getSize()>0){
            $num = $G_searched->getSize();
            if($num >$G_MAX_SERCHED_FOR_PAGE){ 
                $num2 = $G_MAX_SERCHED_FOR_PAGE; 
                
            } else { 
                $num2 = $num;
            }
            for($i=0;$i<$num;$i++)
            {
                $next=$G_searched->getNextElement();
                echo "<p>";
                echo "<div class='divSearched'>";
                $img=$next->getImmagini();
                echo "<img src='".$img[0]."' class='imgSearched' >";
                echo "<strong><a href='?page=product&obj=".$next->getId()."' >".$next->getNome()."</a></strong>"."<br>";
                echo "Marca:  ".$next->getMarca()."<br>";
                echo "Prezzo: ".$next->getPrezzo()." €"."<br>";
                echo "</div>";
                echo "</p>";
            }
        } else {
            echo "<p>Nessun elemento corrispondente</p>";
        }
    ?>
</div>


