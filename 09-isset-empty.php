<?php
include("includes/header.php");

// los arrays asociativos son muy similares a los objetos en JavaScrit
$usuarios = [];

$usuarios2 = ['Pepe', 'Eva', 'Tomas'];

$usuario = [
    'nombre'=> 'Pepe',
    'nivel' => 2,
    'permisos' =>[
        'administrador' => true,
        'cliente'=> false,
    ]
];
// empty comprueba si un arreglo esta vacio
var_dump(empty($usuarios));
echo'<br>';
var_dump(empty($usuarios2));
echo '<br>';

// isset comprueba si un arreglo esta creada o una propiedad esta definida 
var_dump(isset($usuario4));
echo '<br>';

var_dump(isset($usuario['nivel']));
if(isset($usuario['nivel'])){
    echo'El usuario tienen el nivel' .$usuario['nivel'];
}else{
    echo 'El usuario no tiene el nivel definido';
}


include("includes/footer.php");

