<?php

/*$car =['nome' => 'Lucas', 'idade' => 17, 
'profissão' => 'programador', 
'estado cvil'=> 'solteiro'];

print_r($car);

$idade = $car['idade'];

echo"<br>";

if($idade> 18){

    echo "o indivíduo é maior de idade";

}
else{
    echo "o indivíduo é menor de idade";
}*/

$car =['nome' => 'Lucas', 'idade' => 25, 
'profissão' => 'programador', 
'estado cvil'=> 'solteiro'];

print_r($car);

$maioridade = 18;

echo"<br>";

if($car['idade']>= $maioridade){

    echo "o indivíduo é maior de idade";

}
else{
    echo "o indivíduo é menor de idade";
}

