<?php
include("includes/header.php");

/**
 * Son arrays asociativos predefinidos disponibles en todo el script en php
 */

/**
 * $_GET - contiene variables pasados al script a traves de parametros en la url
 */

/**
 * $_POST - contiene valores pasadas a traves de http post
 */

/**
 * $_REQUEST - contiene los valores del $_GET, $_POST Y $_COOKIE
 */

 /**
  * $_COOKIE - valores pasados a traves de http cookie
  */

  /**
   * $_SESSION - contiene variables disponibles para el script actual
   */

   /**
    * $_SERVER - contiene informacion sobre el entorno del servidor 
    */

    /**
    * $_ENV - contiene variables de entorno disponibles para el script actual y la disponibilidad
    *de la configuracion del servidor
    */

if(isset($_ENV['PATH'])){
    echo "Path:" .$_ENV['PATH']. "<br>";
}else{
    echo 'La variable ENV no esta disponible <br>';
}
// Mostrar la IP del usuario
$user_ip = $_SERVER["REMOTE_ADDR"];
echo "tu IP es :".$user_ip. "<br>";


$nombreServidor = $_SERVER['SERVER_NAME'];
echo 'El nombre del servidor:'.$nombreServidor.'<br>';

// echo '<ul>';
// foreach($_SERVER as $key => $valor) {
// echo '<li>' $valor.'<br>';
// }
// echo '</ul>';



include('includes\footer.php');



