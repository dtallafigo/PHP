<?php

/**
 * Imprime por la salida la tabla de multiplicar del numero que se pasa como parametro
 *
 * @param [type] $n
 * @return void
 */
function dibujar_tabla($n) 
{
    for ($i = 0; $i <= 10; $i++) {
        echo "$n x $i = " . $n * $i . "\n";
    }
}

function suma($x, $y) 
{
    return $x + $y;
}