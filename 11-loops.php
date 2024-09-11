<?php
include("includes/header.php");

// bucle for
for ($i=0; $i < 10; $i++) { 
    echo $i . '<br>';
}

for ($i=0; $i < 10; $i++): 
    echo $i . '';
endfor;
echo'<br>';
// while
$i = 0;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
echo'<br>';
// do while
$i = 0;
do{echo $i;
    $i++;
}while($i <= 10);
// 
// FIZZ BUZZ
// Imprimir n numeros
// si n es multiplo de 3 imprimir n - FIZZ
// si n es multiplo de 5 imprimir n - BUZZ
// si n es multiplo de 3 y de 5 imprimir n - FIZZ BUZZ
// 
echo'<h2>FIZZ BUZZ</h2>';
$n = 100;
for ($i=1; $i < $n; $i++) { 
    if ($i % 3== 0 && $i % 5== 0) {
        echo $i .'- FIZZ BUZZ<br>';
    }elseif ($i % 3 === 0) {
        echo $i .'- FIZZ <br>';
    }else if ($i %5=== 0) {
        echo $i .'- BUZZ <br>';
    }else{
        echo $i . '<br>';
    }
};

echo '<h2>CLAUDE</h2>';
function fizzBuzz($start,$end){
    for($i = $start ;$i <=$end; $i++){
        $salida='';
        if($i % 3 === 0) $salida.='FIZZ';
        if($i % 5=== 0) $salida.= 'BUZZ';

        echo $salida ===''? $i :"$i $salida"; 
        echo '<br>';
    }
}

fizzBuzz(1, 100);

include('includes\footer.php');