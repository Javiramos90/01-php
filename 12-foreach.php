<?php
include("includes/header.php");

$vehiculos = ['Coche', 'Avion', 'Camion', 'Moto', 'Furgoneta', 'Barco'];

// para saber el numero de elementos del array
echo count($vehiculos). '<br>';
echo sizeof($vehiculos). '<br>';

for($i = 0 ; $i < count($vehiculos) ; $i++){
    echo $vehiculos[$i].'<br>';
}

foreach($vehiculos as $vehiculo){
    echo $vehiculo.'<br>';
} 

$usuario = [
    'nombre' => 'Pepe',
    'nivel' => 2,
    'permiso'=> 'administrador',
];

foreach($usuario as $valor){
    echo $valor.'<br>';

}
foreach ($usuario as $key => $valor){
    echo $key. ' : '.$valor.'<br>';
};

$productos = [[
    'nombre' => 'libro',
    'precio'=> 24,
    'disponible'=> true,
    'oferta'=> true,
],[
    'nombre' => 'folios',
    'precio'=> 18,
    'disponible'=> false,
    'oferta'=> false,

],[
    'nombre' => 'libreta',
    'precio'=> 30,
    'disponible'=> true,
    'oferta'=> false,

]
];

echo '<div class= "articulos">';
foreach($productos as $producto){
    ?>
    <article>
        <p>Producto: <?php echo $producto['nombre'];?></p>
        <p>Producto: <?php echo $producto['precio']. '€';?></p>
        <p><?php echo $producto['disponible']? 'Disponible':'No Disponible' ?></p>
        <p><?php echo $producto['oferta'] ? '<p class="rebajado">OFERTA</p>': '' ;?></p>    
    </article>
    <?php
}
echo'</div>';


include('includes\footer.php');