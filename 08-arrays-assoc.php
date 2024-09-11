<?php
include("includes/header.php");

// los arrays asociativos son muy similares a los objetos en JavaScrit
$usuario = [
    'nombre'=> 'Pepe',
    'nivel' => 2,
    'permisos' =>[
        'administrador' => true,
        'cliente'=> false,
    ]
];

$usuario['id'] = 23;

echo'<pre>';
var_dump($usuario);
echo '</pre>';

echo $usuario['permisos']['administrador'];
include("includes/footer.php");

