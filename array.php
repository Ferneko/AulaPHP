<?php
//           0      1       2         3       4
$carros = ["BMW", "Gol", "Saveiro", "Uno", "Palio"];

echo "<pre>";
print_r($carros);
echo "</pre>";


echo "\$carros[1]:".$carros[1]."<br>";


echo "<ul>";
for($i = 0; $i < count($carros); $i++)
{
    echo "<li>". $carros[$i] ."</li>";
}
echo "</ul>";



$carros = array();
echo "<pre>";
print_r($carros);
echo "</pre>";




$carros = array("BMW", "Gol", 32, "Uno");
echo "<pre>";
print_r($carros);
echo "</pre>";


$carros = array();
$carros[1] = "Gol";
$carros[2] = "Saveiro";
$carros[3] = "Uno";
$carros[4] = "Palio";

echo "<pre>";
print_r($carros);
echo "</pre>";

array_push($carros, "BMW");
array_push($carros, "S10");

echo "<pre>";
print_r($carros);
echo "</pre>";

array_pop($carros);
echo "<pre>";
print_r($carros);
echo "</pre>";


//Chave e valor
$pessoa = array("Nome" => "Fernando",
                 "Idade" => 32,
                  "Altura" => 1.77,
                   "Solteiro" => true);


echo "<pre>";
print_r($pessoa);
echo "</pre>";



$listaPessoas = array();

$pessoa2 = array("Nome" => "Maria", "Idade" => 18, "Altura" => 1.60, "Solteiro" => false);
$pessoa3 = array("Nome" => "Pedro", "Idade" => 25, "Altura" => 1.80, "Solteiro" => false);



$listaPessoas[0] = $pessoa;
$listaPessoas[1] = $pessoa2;
array_push($listaPessoas, $pessoa3);


array_push($listaPessoas, $carros);

echo "<pre>";
print_r($listaPessoas);
echo "</pre>";

echo $listaPessoas[3][1];

?>