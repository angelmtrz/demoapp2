<?php
//isset()
//metodo de PHP que comprueba la existencia de un dato
//devuelve true o false
if(isset($_GET['numero'])){
    //var_dump() es unafuncion de PHP que muestra
    //el tipo de dato y el dato contenido en una variable
    //var_dump($_GET['numero']); 
    $numero = (int) $_GET['numero']; //cast de string a int

} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del: $numero</h1>";

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br />";
    $contador++;
}