<?php
if(isset($_GET['numero1']) && isset($_GET['numero2'])){

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = $numero1; $i <= $numero2; $i++){
            if($i % 2 == 0) echo "<h1>$i</h1>";
        }
    } else {
        echo "<h2>numero1 debe ser menor que numero2</h2>";
    }

}else{
    echo "<h2>Debes parar los parámetros numero1 y numero2 por la URL</h2>";
}