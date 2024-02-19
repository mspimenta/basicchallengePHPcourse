<?php
$menor = intval(readline("Digite o número menor: "));
$maior = intval(readline("Digite o número maior: "));

for ($i = $maior; $i >= $menor; $i--) {
    echo $i . " ";
}
?>