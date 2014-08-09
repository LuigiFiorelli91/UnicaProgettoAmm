<?php
    include_once("class/Search.php");
?>
<div class="sidebar sidebar1">
    <p>Filtri:</p>
    <?php
        $n=$G_categorie->getSize();
        $G_categorie->reset();
        echo '<input onclick="doFilterSearch()" type="radio" name="cat" value="'."-1".'"';
        if($G_search_cat=="-1") echo ' checked="checked" ';
        echo '/> All <br>';
        for($i=0;$i<$n;$i++){
            $e = $G_categorie->getNextElement();
            echo '<input onclick="doFilterSearch()" type="radio" name="cat" value="'.$e->getId().'"';
            if($G_search_cat==$e->getId()) echo ' checked="checked" ';
            echo '/>';
            echo $e->getNome();
            echo "<br>";
            $n_E  = $e->getSize();
            $e->reset();
            if($G_search_cat==$e->getId()){
                echo ' |<input onclick="doFilterSearch()" type="radio" name="subCat" value="'."-1".'"';
                if($G_search_subCat=="-1") echo ' checked="checked" ';
                echo '/> All <br>';
                for($j=0;$j<$n_E;$j++){//Sottocategorie
                    $e_S = $e->getNextElement();
                    echo ' |<input onclick="doFilterSearch()" type="radio" name="subCat" value="'.$e_S->getId().'"';
                    if($G_search_subCat==$e_S->getId()) echo ' checked="checked" ';
                    echo '/>';
                    echo $e_S->getNome();
                    echo "<br>";
                }
            }
        }
    ?>
    
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


