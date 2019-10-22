<?php

if ($argc < 2) {
    echo "Sintaxis: {$argv[0]} <número>\n";
    exit(1);
}

$n = $argv[1];

if (!ctype_digit($n)) {
    echo "Error: el <número> debe ser un numero entero y positivo\n";
    exit(2);
}

if ($n < 0 || $n > 10) {
    echo "Error: el <número> debe estar comprendido entre 0 y 10";
    exit(3);
}

for ($i = 0; $i <= 10; $i++) {
    echo "$n x $i = " . $n * $i . "\n";
}
