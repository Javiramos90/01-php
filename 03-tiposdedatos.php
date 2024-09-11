<?php
include("includes/header.php");
    
    echo '<h2>Tipos de Datos</h2>';

// Boolean
$isAutorized = false;

echo '<p>'. $isAutorized. '</p>';
var_dump( $isAutorized );

// Enteros
$numero = 200;
echo '<p>El numero es:'. $numero.'y es un numero entero</p>';

// float
$float = 30.6;
var_dump( $float );
echo '<br>';

// strings
$nombre = 'Ana';

// Array

$array = [1, 2, 3];
$array2= array('fresa', 'piña', 'melocoton');
var_dump( $array );
echo '<br>';
var_dump( $array2 );


include("includes/footer.php");

    ?>