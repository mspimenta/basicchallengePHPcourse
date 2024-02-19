<?php
$totalPagar = 0;

do {
    $valorCompra = floatval(readline("Digite o valor da compra (digite 0 para encerrar): "));

    if ($valorCompra > 0) {
        $totalPagar += $valorCompra;
    } elseif ($valorCompra < 0) {
        echo "Valor negativo não é válido. Insira um valor positivo." . PHP_EOL;
    }
} while ($valorCompra != 0);

if ($totalPagar > 1000) {
    $desconto = $totalPagar * 0.15;
    $totalPagar -= $desconto;
}

echo "O valor total a pagar é: R$ " . number_format($totalPagar, 2, ',', '.') . PHP_EOL;
?>
