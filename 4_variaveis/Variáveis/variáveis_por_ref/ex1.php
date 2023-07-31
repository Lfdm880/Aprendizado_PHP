<?php

echo "atribuição de referência";

echo "<br>";
$x = 2;
echo $x;
echo "<br>";
$y= &$x;
echo "<br>";
echo $y;
echo "<br>";
echo "atribuiçao após mudança da referenciada";

$y = 5;
echo "<br>";
echo $y;
