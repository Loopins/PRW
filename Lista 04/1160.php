<?php
$T = intval(fgets(STDIN));

for ($i = 0; $i < $T; $i++) {
    $linha = fgets(STDIN);
    $populacao = explode(" ", $linha);
    $PA = intval($populacao[0]);
    $PB = intval($populacao[1]);
    $G1 = floatval($populacao[2]);
    $G2 = floatval($populacao[3]);
    $anos = 0;

    while ($PA <= $PB) {
        $PA += intval($PA * ($G1 / 100));
        $PB += intval($PB * ($G2 / 100));
        $anos++;

        if ($anos > 100) {
            break;
        }
    }

    if ($anos <= 100) {
        echo $anos . " anos.\n";
    } else {
        echo "Mais de 1 seculo.\n";
    }
}
?>
