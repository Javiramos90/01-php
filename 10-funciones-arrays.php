<?php
include("includes/header.php");

// in_array - buscar elementos en un array para comprobar si existe 
$frutas = ['fresa', 'piña', 'pera'];
$existe = in_array('pera', $frutas);
if ($existe) {
    echo'<p> El elemento existe</p>';
}

if ($existe):
    echo'<p> El elemento existe</p>';
elseif(!$existe): 
    echo '<p>El elemento no existe</p>';
endif;
echo'<br>';

// ordenar los elementos de menor a mayor
sort($frutas);
echo '<pre>';
var_dump($frutas);
echo'</pre>';

// ordenar los elementos de mayor a menor
rsort($frutas);
echo '<pre>';
var_dump($frutas); 
echo '</pre>';


$usuario = [
// la clave siempre tiene que ser un string
//  'claves' => 'valores'
    'nombre'=> 'Pepe',
    'nivel' => 'inicial',
    'permisos' =>'algunos'

];

// ordenar arreglo asociativo asort , arsort
asort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';
echo '<br>';

arsort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';

//ordenar por claves keys ksort krsort
ksort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';
echo '<br>';

krsort($usuario);
echo '<pre>';
var_dump($usuario);
echo '</pre>';
include("includes/footer.php");



