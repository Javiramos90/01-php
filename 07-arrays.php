<?php
include("includes/header.php");

// Declaracion
$array1 = [];
$productos = ['coca-cola', 'fanta', 'agua'];

// ver los elementos de un array
echo'<pre>';
var_dump($array1);
echo'</pre>';

// acceder a un elemento del array
echo $productos[0];
echo '<br>';

// agregar elementos
$productos[3] = 'casera';
echo '<pre>';
var_dump($array1);
echo'</pre>';

// agregar elemento al final
array_push($productos, 'zumo');

// agregar elemento al principio
array_unshift($productos, 'cerveza');
echo '<pre>';
var_dump($productos);
echo '</pre>';

include("includes/footer.php");

