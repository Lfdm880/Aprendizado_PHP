<?php

$x = 10;

echo "$x Global";

echo "<br>";

function teste() {
    $x = 5;
    echo "$x local";

}
function testando() {
    $x = 40;
    echo "$x local 2 <br>";

}


//chamando a função
teste();
echo "<br>";
testando();