<?php
include("includes/header.php");

/**
 * 1- Crear un array con 8 numeros entero
 * 2- Recorrer el array y mostrarlo
 * 3- Ordenar el array(de menor a mayor) y mostrarlo
 * 4- Mostrar su logitud
 * 5- Buscar algun elemento
 * 6- Añadirle valores al array mientras sea menor que 120
 * 7- Mostrar el array
*/

$numeros = [1, 2, 3, 4, 5, 6, 7, 8];


echo"<pre>";
var_dump($numeros);
echo '<br>';
echo '</pre>';

for ($i = 0; $i < 8; $i++) {
echo $i."<br>";
}

/**
 * Comprobar si una variable esta vacia
 * Si esta vacia, rellenarla con texto en minuscula
 * Mostrar por pantalla su contenido en mayuscula y en negrita
 */

 $usuario;
 if(empty($usuario)){
    echo "variable vacia";
 }else{
    echo "variable no esta vacia";
 }
 echo'<br>';
// tecnario
echo (empty($usuario)) 
? 'variable vacia'
:'variable con elemento';
echo'<br>';

if(empty($usuario)){
    $usuario = "En algun lugar de la mancha";
}
$usuario = strtoupper($usuario);
echo $usuario;
echo "<br>";

echo '<b>'.$usuario.'</b>';


/**
 * Crear 4 variables: 1 string, int, array y bool
 * Mostrar por pantalla el tipo y valor de cada una
 */

$string = 'Ana';
$numero = 50;
$array = [2, 'pepe', 3, 'luis'];
$bool = true;

$datos = [$string, $numero, $array, $bool];

var_dump($datos);
echo '<br>';

/**
 * Crea un array con el contenido de la siguiente tabla
 * ACCION       AVENTURA        DEPORTES 
 * GTA          ASSASSINS       FIFA19
 * COD           CRASH          PES19
 * PUGB         PRINCE OF       MOTO GP 19
 *              PERSIA
 * Mostrar el contenido en una tabla de html
 */

 $juegos = [
    'ACCION' =>[ 'GTA','COD','PUGB', 'GOW'], 
    'AVENTURA' =>['ASSASINS','CRASH','PRINCE OF PERSIA'],
    'DEPORTES' =>['FIFA 19','PES 19','MOTO GP 19', 'NBA 19']
 ];
 
 $max_juegos = array_map('count', $juegos);
 $max_num_juegos = max($max_juegos);

 echo "<h2>JUEGOS POR CATEGORIAS</h2>";
 echo '<table>';
 
 echo '<tr>';
 foreach ($juegos as $key => $value){
    echo "<th>$key</th>";
 }
 echo'</tr>';
 
 for ($i = 0; $i < $max_num_juegos; $i++) {
    echo '<tr>';
    foreach($juegos as $categoria){
        echo '<td>';
        if($categoria [$i]){
            echo $categoria[$i];
        }
        echo '</td>';
    }
    echo'</tr>';

 }
echo'</table>';
include('includes\footer.php');


