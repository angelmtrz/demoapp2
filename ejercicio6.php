<?php
//array asociativo key=>value de 1 dimension
$personas = array(
    "nombre" => "Tony",
    "apellido" => "Stark",
    "heroe" => "Ironman"
);
echo $personas["nombre"]; //Tony
echo "<br />";
var_dump($personas);
echo "<br /><br />";
//array asociativo multidimensional
$avengers = array(
    array(
        "nombre" => "Tony",
        "apellido" => "Stark",
        "heroe" => "Ironman"
    ),
    array(
        "nombre" => "Bruce",
        "apellido" => "Banner",
        "heroe" => "Hulk"
    ),
    array(
        "nombre" => "Natasha",
        "apellido" => "Romanoff",
        "heroe" => "Black Widow"
    ),
    array(
        "nombre" => "Steve",
        "apellido" => "Rogers",
        "heroe" => "Capitan América"
    ),
);
var_dump($avengers);
echo "<br /><br />";

foreach($avengers as $key => $value){
    var_dump($value);
}