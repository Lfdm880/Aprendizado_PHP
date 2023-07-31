<?php
//textos sao conhecidos como strings
//podemos utilizar aspas simples e duplas
//aspas duplas interpretam varáveis

echo "testando texto de aspas duplas <br>";
echo 'testando texto de aspas simples';
echo "ela me disse 'Você é chato' <br>";

$idade= 25;
$nome = "lucas";

echo " Eu tenho $idade anos <br>";

if(is_string($idade)){
    echo "é uma string <br>";
}

else {
    echo "nao é string";
}

?>