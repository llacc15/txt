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

// Leer números desde la terminal
$numeros = [];
echo "Ingrese los números separados por espacios: ";
$entrada = readline();
$numeros = array_map('intval', explode(' ', $entrada));

$numerosOrdenados = ordenarArray($numeros);

print_r($numerosOrdenados); 

?>
