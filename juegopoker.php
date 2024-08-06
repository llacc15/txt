<?php

function generarCarta() {
    $cartas = ["A♣", "2♣", "3♣", "4♣", "5♣", "6♣", "7♣", "8♣", "9♣", "10♣", "J♣", "Q♣", "K♣", "A♦", "2♦", "3♦", "4♦", "5♦", "6♦", "7♦", "8♦", "9♦", "10♦", "J♦", "Q♦", "K♦", "A♥", "2♥",
    "3♥", "4♥", "5♥", "6♥", "7♥", "8♥", "9♥", "10♥", "J♥", "Q♥", "K♥", "A♠", "2♠", "3♠", "4♠", "5♠", "6♠", "7♠", "8♠", "9♠", "10♠", "J♠", "Q♠", "K♠"];
    return $cartas[array_rand($cartas)];
}

function generarcartas() {
    $mano = [];
    for ($i = 0; $i < 5; $i++) {
        $mano[] = generarCarta();
    }
    return $mano;
}


function repartircartas($mano) {
    $cartas = array_count_values($mano);
    if (count($cartas) == 5) {
        return 'Nada';
    } elseif (count($cartas) == 4) {
        return 'Par';
    } elseif (count($cartas) == 3) {
        return 'Trio';
    }
}
$seguirJugando = true;
while ($seguirJugando) {
$mano = generarcartas();
echo "Tu mano es: " . implode(', ', $mano) . "\n";
echo "Tu mano es un: " . repartircartas($mano) . "\n";
  

$respuesta =readline("desea seguir jugando? (si/no): ");
echo "¿Desea volver a jugar? (si/no): ";

    if ($respuesta !== "si") {
        $seguirJugando = false;
 }
}
echo "gracias por jugar./n"
?>