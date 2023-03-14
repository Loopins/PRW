<?php
$N = intval(fgets(STDIN));
$V1 = 1;
$V2 = 1;
$V3 = 0;

echo $V3 . " " . $V1 . " " . $V2 . " ";

$i = 3;

for (; $i < $N;) {
  $V3 = $V1 + $V2;

  echo $V3;

  if ($i < ($N - 1)) echo " ";

  $V2 = $V1;

  $V1 = $V3;

  $i = $i + 1;
}

echo "\n";