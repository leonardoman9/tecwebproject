
 <?php 
 $stampa = false;
        foreach($allFotos as $foto){
            if($ann->id_alloggio == $foto->id_alloggio) {
                echo "<img src=../storage/app/{$foto->path} class='catfoto' onmouseover='bigImg(this)' onmouseout='normalImg(this)'>";
                $stampa = true; 
                break; 
            }
        }
        if($stampa==false) echo "<img src=../storage/app/public/foto/default.jpg class='catfoto' >";
?>
