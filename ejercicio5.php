<?php
$v = fierroAlv("i")
function fierroAlv() {
  for ($i = 1; $i <= $v; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
      echo "PesoPluma";
    } else if ($i % 3 === 0) {
      echo "Peso" . ;
    } else if ($i % 5 === 0) {
      echo "Pluma";
    } else {
      echo $i.PHP_EOL;
    }
  }
  }

echo fierroAlv();
?>