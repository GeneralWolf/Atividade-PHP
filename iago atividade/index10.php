<?php

function fibonacci($n) {
    $fibonacciArray = array();
    $fibonacciArray[0] = 0;
    $fibonacciArray[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }

    return $fibonacciArray;
}
$quantidadeNumeros = 25;
$fibonacciArray = fibonacci($quantidadeNumeros);

echo "Os primeiros $quantidadeNumeros números da sequência de Fibonacci são: ";
echo implode(', ', $fibonacciArray);

?>
