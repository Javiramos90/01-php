<?php
include("includes/header.php");
    
$nombre = "Pepito";
$nombre = "Manolito";

echo $nombre;
echo '<br>';
var_dump($nombre);

echo '<br>';
echo '<p>' . $nombre .'</p>';
// la clase se coloca utilizan comillas simples
echo "<h3 class='titulo'>$nombre</h3> ";

include("includes/footer.php");

    ?>