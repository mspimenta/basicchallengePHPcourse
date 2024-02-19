<?php
$numero = intval(readline("Digite um número: "));
$numDigitos = strlen((string)$numero);

echo "O número {$numero} possui {$numDigitos} dígitos." . PHP_EOL;
?>