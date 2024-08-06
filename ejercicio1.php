<?php

function esPalindromo($cadena) {
  $cadena = preg_replace('/\s+/', '', $cadena);
  $cadena = preg_replace('/[^a-zA-Z0-9]/', '', $cadena);
  $cadena = strtolower($cadena);
  $cadenaInvertida = strrev($cadena);
  $tex "es un palíndromo por que se puede leer igual al derecho que alrevez"
  return $cadena === $cadenaInvertida;
}
$cadena1 = "somos o no somos";
$cadena2 = "arroz con yuca :)";
if (esPalindromo($cadena1)) {
  echo "$cadena1:es un palíndromo por que se puede leer igual al derecho que alrevez\n";
} else {
  echo "$cadena1 no es un palíndromo\n";
  
}

if (esPalindromo($cadena2)) {
  echo "$cadena2 es un palíndromo\n";
} else {
  echo "$cadena2 no es un palíndromo\n";
}
echo = $tex
?>