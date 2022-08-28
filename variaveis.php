<?php
#Variaveis
/*
Os nomes de variáveis sempre começam com o caractere $ (cifrão).
São sensíveis à letra, ou seja, $Valor é diferente de $valor.
Um nome de variável válido deve iniciar com um sublinhado OU uma letra
Nunca deve ser iniciado com um número ou caractere especial.
*/

$idade = 32; //Inteiro
$nome = "Fernando"; // String
$Altura = 1.77; // Float , double, decimal
$solteiro = true; // boleana

//Sinal de = indica atribuição de dados para variavel

//Operadores Aritmeticos
$numero1 = 20;
$numero2 = 10;

$soma = $numero1 + $numero2; // 30
$subtracao = $numero1 - $numero2; //10
$multiplicacao = $numero1 * $numero2; //200
$divisao = $numero1 / $numero2; //2
$restoDivisao = $numero1 % 2 ; //0

echo "Soma: ".$soma."<br>";
echo "Subtração: ".$subtracao."<br>";
echo "Multiplicação: ".$multiplicacao."<br>";
echo "Divisão: ".$divisao."<br>";
echo "Resto da divisão: ".$restoDivisao."<br>";

$numero1 > $numero2; //Maior true
$numero1 >= $numero2; // Maior igual
$numero1 < $numero2; // Menor
$numero1 <= $numero2; // Menor igual
$numero1 == $numero2; // Igual
$numero1 != $numero2; // Diferente
$numero1 === $numero2; // Mesmo valor e mesmo Tipo
$numero1 !== $numero2; // Diferente valor ou diferente de tipo

$texto = "10"; // == true
$numero = 10; // === false

$texto  .= " 20"; //"10 20 "
$numero += 10;
$numero -= 10;
$numero *= 10;
$numero /= 10;

$numero++;
$numero--;

?>