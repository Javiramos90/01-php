<?php
include("includes/header.php");


// echo"<h2>Aqui recibo los datos del formulario</h2>";


if(isset($_POST['nombre'])){
    $nombre = trim($_POST['nombre']) ;
    echo'Hola:'.$nombre;

}if(isset($_POST['apellidos'])){
    echo ''. $_POST['apellidos'];
}

include('includes\footer.php');