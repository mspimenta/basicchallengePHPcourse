<?php
$soma = 0;

do {
    $numero = intval(readline("Digite um número (digite 0 para parar): "));
    $soma += $numero;
} while ($numero != 0);

echo "A soma dos números digitados é: {$soma}" . PHP_EOL;
?>