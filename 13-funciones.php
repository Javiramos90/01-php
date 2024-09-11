<?php
// es un funcion que se usa para evitar gran parte de errores
// Activa el modo de tipado estricto 
// solo afecta elarchivo en el que se declara
// debe ser la primera instruccion de archivo
// realiza comprobaciones de tipo de parametros y valores de retorno de las funciones 
declare(strict_types= 1);
include("includes/header.php");

// require "includes/header.php";

include_once("");
// este elmento actua cuando se ejecuta la misma funcion en dos o varias ocasiones, actua ejecutando solo una vez la funcion 



echo "<h2>Funciones</h2>";

// 
// Tipos de datos:
// int
// bool
// string
// 
// 
// 
// 

function sumar(int $n1, int $n2): void{
    echo $n1 + $n2;
}
sumar(5, 7);

echo "<br>";
function restar($n3, $n4): int{
    return $n3 - $n4;
}

$resultado = restar(7, 4);
echo restar(8, 3);



include('includes\footer.php');



