<?php
$numeroTabuada = intval(readline("Digite o valor da tabuada (de 1 a 10): "));
$valorFinal = intval(readline("Digite o valor final: "));

for ($i = 0; $i <= $valorFinal; $i += $numeroTabuada) {
    echo $i . " ";
}
?>