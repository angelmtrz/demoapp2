<?php
//bucle while
//se utiliza cuando no conocemos la 
//cantidad de repeticiones que se realizaran
$numero = 0;
while($numero <= 100){

    echo $numero;

    if($numero != 100){
        echo ", ";
    }
    
    $numero++;
}