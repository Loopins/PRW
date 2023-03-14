<?php

fscanf(STDIN, "%d", $N);

$total = 0;
$sapos = 0;
$coelhos = 0;
$ratos = 0;

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %s", $quantidade, $tipo);

    if ($tipo == "S") {
        $sapos += $quantidade;
    } elseif ($tipo == "C") {
        $coelhos += $quantidade;
    } elseif ($tipo == "R") {
        $ratos += $quantidade;
    }

    $total += $quantidade;
}

$percentual_sapos = ($sapos / $total) * 100;
$percentual_coelhos = ($coelhos / $total) * 100;
$percentual_ratos = ($ratos / $total) * 100;

echo "Total: " . $total . " cobaias" . PHP_EOL;
echo "Total de coelhos: " . $coelhos . PHP_EOL;
echo "Total de ratos: " . $ratos . PHP_EOL;
echo "Total de sapos: " . $sapos . PHP_EOL;
printf("Percentual de coelhos: %.2f %%\n", $percentual_coelhos);
printf("Percentual de ratos: %.2f %%\n", $percentual_ratos);
printf("Percentual de sapos: %.2f %%\n", $percentual_sapos);

?>
