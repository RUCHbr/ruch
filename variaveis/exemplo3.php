<?php
//Básico
$nome = "Breno";
$site = "protroika.com.br";
///////////////////////////
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////COMPOSTOS
$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
//////////////////////////

$arquivo = fopen("exemplo3.php", "r");

var_dump($arquivo);

?>