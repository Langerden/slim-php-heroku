<?php

/*
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.

Langer Denise
*/

$lapiceraAsociativa = array(
    'Color' => "Negro",
    "Marca" => "BIC",
    "Trazo" => "Fino",
    "Precio" => 20);

$lapiceraIndex= array("Rojo", "Faber Castel", "Grueso", 35);

$lapiceras = array('Lapicera - Array Asociativo' => $lapiceraAsociativa, 'Lapicera - Array Indexado' => $lapiceraIndex);

foreach($lapiceras as $key => $value)
{
    echo "<h2>$key</h2><ul></ul>";     
    foreach($value as $index => $valor)
    {
        echo "<li>$index: $valor </li>";
    }
}

?>