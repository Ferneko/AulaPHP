<?php 
//Estruturas de Repetição
//Loop

//3 regras básicas
//Variavel de controle
//Incremento
//Verificação
$controle = 0;
//Do while
do{
    echo "Valor de Controle é: $controle <br>";
    $controle++;
}while($controle < 10);


//While
echo "<br> While () <br>";
while($controle <= 20)
{
    echo "Valor de Controle é: $controle <br>";
    $controle++;
}

//For
echo "for<br>";
for($i = 0; $i <= 10; $i++)
{
    echo "Valor de i é: $i <br>";
}


?>