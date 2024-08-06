<?php

function sumaDigitos($numero) {
  $suma = 0;
  $numero = strval($numero);
  for ($i = 0; $i < strlen($numero); $i++) {
    $suma += intval($numero[$i]);
  }
  return $suma;
}
$numero = 1;
$suma = sumaDigitos($numero);
echo "La suma de los dígitos de $numero es: $suma";

?>