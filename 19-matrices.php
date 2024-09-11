<?php
include("includes/header.php");

$array1= [0, 1, 2];

echo"<pre>";
var_dump($array1);
echo"</pre>";

// for ($i=0; $i < count($array1); $i++) { 
//    echo 'Valor de i: ' . $i . 'Contenido del array:' . $array1($i) . '<br>';
// };

$array2 = [
   [0,1,2], 
   [0,1,2], 
   [0,1,2]];
// 
for ($i=0; $i < count($array2); $i++){
   for ($j=0; $j < 3; $j++){
      echo $i. '-' .$j .'<br>';
   };

};
$array3 = [
   ['primero 0','primero 1','primero 2'], 
   ['segundo 0','segundo 1','segundo 2'], 
   ['tercero 0','tercero 1','tercero 2']
];

for ($i= 0; $i < count($array3); $i++){
   for ($j= 0; $j < count($array3[$i]); $j++){
      echo $array3[$i][$j] .' ';
   }
   echo '<br>';
};

?>
<!-- <table>
   <thead>
      <th>primera</th>
      <th>segunda</th>
      <th>tercera</th>
   </thead>
   <tbody>
      <tr>
         <td>primero 0</td>
         <td>primero 1</td>
         <td>primero 2</td>
      </tr>
      <tr>
         <td>segunda 0</td>
         <td>segunda 1</td>
         <td>segunda 2</td>
      </tr>
      <tr>
         <td>tercera 0</td>
         <td>tercera 1</td>
         <td>tercera 2</td>
      </tr>
   </tbody>
</table> -->
<?php

echo '<table border="1">';
   echo '<thead>';
      echo '<th>';
         echo 'primera';
      echo '</th>';
      echo '<th>';
         echo 'segunda';
      echo '</th>';
      echo '<th>';
         echo 'tercera';
      echo '</th>';
   echo '</thead>';
   echo '<tbody>';
   for ($i=0; $i < count($array3) ; $i++) { 
   echo'<tr>';
     for ($j=0; $j < count($array3[$i]); $j++) { 
        echo '<td>'; 
        echo $array3[$i][$j];
        echo '</td>';
     }
   echo '</tr>';
   };
   echo '</tbody>';
echo '</table>';
include('includes\footer.php');


