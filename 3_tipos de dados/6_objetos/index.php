<?php

class Pessoa{

    function falar(){
        echo "olá pessoal";
    
    }
}

$lucas = new Pessoa();

$lucas->nome = "Lucas Felipe";

echo $lucas->nome;

echo "<br>";

$lucas->falar();



?>
