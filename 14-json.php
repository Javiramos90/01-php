<?php

declare(strict_types= 1);
include("includes/header.php");
// JSON
// Formato ligero de intercambio de datos
// Se utiliza para transmitir datos entre un servidor y un cliente
// Una coleccion de datos que son pares de claves y valor
// Esa coleccion se muestra en una lista o array 
// JavaScript, React, Angular, Vue, Android, Java, C, Kotlin..
// entienden, manejan y consumen datos de Json

$productos = [[
    'nombre' => 'libro',
    'precio'=> 24,
    'disponible'=> true,
    'oferta'=> true,
],[
    'nombre' => 'folios',
    'precio'=> 18,
    'disponible'=> false,
    'oferta'=> false,

],[
    'nombre' => 'libreta',
    'precio'=> 30,
    'disponible'=> true,
    'oferta'=> false,

]
];

echo'<pre>';
var_dump($productos);
echo '</pre>';

// cuando hacemos una colsulta a una base de datos podemos obtener los datos de un array asociativo
// ese arreglo lo tranformamos a Json para enviarlo al cliente
$productos_json = json_encode($productos, JSON_UNESCAPED_UNICODE );

echo'<pre>';
var_dump($productos_json);
echo '</pre>';
// convertir un json a array asociativo
$productos_array = json_decode($productos_json, true);

echo'<pre>';
var_dump($productos_array);
echo '</pre>';
include('includes\footer.php');



