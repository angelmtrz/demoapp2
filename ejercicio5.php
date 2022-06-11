<?php
$autos = array("Toyota", "Honda", "Ford", "Kia");
$motos = ["Honda", "Yamaha", "Lifan", "Suzuki", "ZongShen"];
$numeros = [23,5,435,23,109,8,0,35,55];
$varios = [255, "Palabra", false, 34.66, 'C'];

var_dump($autos);
echo "<br />";
var_dump($motos);
echo "<br />";
var_dump($numeros);
echo "<br />";
var_dump($varios);
echo "<br />";
echo "<br />";

for($i = 0; $i < count($motos); $i++){
    echo $motos[$i] . "<br />";
}

echo "<br />";

foreach($autos as $auto){
    echo $auto . "<br />";
}

echo "<br />";

//definicion de la funcion
function mostrarNumeros($numeros){
    foreach($numeros as $numero){
        echo $numero . "<br />";
    }
}

sort($numeros); //ordena array de forma ascendente
//llamada a ejecucion de la funcion
mostrarNumeros($numeros);

echo "<br /> Nro. de elementos del array: " . count($numeros) ."<br />";

//buscar un elemento dentro del array
$elemento = 678;
if(array_search($elemento, $numeros)){
    echo "El numero $elemento se encuentra en el array";
} else {
    echo "El numero $elemento NO se encuentró";
}