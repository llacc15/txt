<?php

function ordenarArray($array) {
  $n = count($array);

  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($array[$j] > $array[$j + 1]) {
        $temp = $array[$j];
        $array[$j] = $array[$j + 1];
        $array[$j + 1] = $temp;
      }
    }
  }

  return $array;
}

$numeros = [5, 2, 8, 1, 9, 3];
$numerosOrdenados = ordenarArray($numeros);

print_r($numerosOrdenados); 

?>