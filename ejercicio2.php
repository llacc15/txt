<?php

function generarFibonacci($numero) {
  $fibonacci = [1,0]; 

  for ($i = 2; $i <= $numero; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
  }

  return array_slice($fibonacci, 0, $numero + 1);
}

$numero =11 ;
$secuenciaFibonacci = generarFibonacci($numero);

echo "La secuencia de Fibonacci hasta $numero es: ";
var_dump($secuenciaFibonacci);

?>