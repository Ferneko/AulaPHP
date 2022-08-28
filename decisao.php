<?php
//Estrutura de Decisão
//if

$numero = 10;
$texto = "10";

//comparação de mesmo valor
if ($numero == $texto) 
{
    echo "A variável \$numero: $numero é igual a variável \$texto:$numero";
}
else
{
    echo "Não são iguais";
}





//Comparação valor igual e do mesmo tipo
echo "<br>";
if($numero === $texto)
{
    echo "são iguais e do mesmo tipo";
}
else if($numero !== $texto)
{
    echo "São diferentes no valor ou diferentes no tipo";
}





//Se o resto da divisão por 2 é igual a zero
echo "<br>";
if($numero % 2 == 0)
{
    echo "Número par";
}
else
{
    echo "Número impar";
}




echo "<br>";
if(10 > 12)
{
    echo "Numero é maior";
}
else if(10 == 12)
{
    echo "Numero Igual";
}
else
{
    echo "10 não é maior que 12";
}


?>