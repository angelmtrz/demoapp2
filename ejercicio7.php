<?php

$deportes = array(
    "Futbol" => array("Liverpool", "Real Madrid", "Alianza Lima"),
    "Formula 1" => array("Ferrari", "McLaren", "Honda"),
    "Basket" => array("LA Lakers", "Chicago Bulls", "Miami Heat")
);

echo $deportes["Futbol"][2]."<br />";
echo $deportes["Formula 1"][0]."<br />";
echo $deportes["Basket"][1]."<br /><br />";

function saludo($nombre){
    return "hola, $nombre";
}

echo saludo("Angel");