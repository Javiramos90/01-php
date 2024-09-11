<?php
include("includes/header.php");
echo"<h2>GET</h2>";
?>

<h2>Formulario con GET</h2>
<form action="recibir-get.php">
    <div class="campoform">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
    </div>
    <div class="campoform">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos">
    </div>
    <div class="campoform">
        <input type="submit" value="Enviar datos">
    </div>
</form>

<?php
include('includes\footer.php');



