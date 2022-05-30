
 <?php 
 $stampa = false;
        foreach($allFotos as $foto){
            if($ann->id_alloggio == $foto->id_alloggio) {
                echo "<img src=../{$foto->path} class='catfoto'>";
                $stampa = true; 
                break; 
            }
        }
        if($stampa==false) echo "<img src=../public/foto/default.jpg class='catfoto' >";
?>
