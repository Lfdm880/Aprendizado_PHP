<?php

/*$arr= ['noivos' => 'Lucas e Amanda', 'idade' => '24 e 32 anos'];

print_r($arr);



echo $arr['noivos'];
echo "<br>";
echo $arr['idade'];*/

$Casa =['Cozinha' => 'Fogão, geladeira, pia',
'quarto' =>2,
'banheiro' => 1,
'sala em metros quadrados' =>32,
'varanda' =>false,

];

print_r($Casa);

echo "<br>";

echo $Casa['varanda'];

echo "<br>";
$cozinha = $Casa['Cozinha'];
$quarto = $Casa['quarto'];

echo " a coznha possui $cozinha e a casa tem um total de $quarto quartos"

?>