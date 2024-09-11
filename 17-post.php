<?php
include("includes/header.php");
echo"<h2>POST</h2>";
?>

<h2>Formulario con POST</h2>
<form action="recibir-post.php" method="POST">
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



