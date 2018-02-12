<?php
	
$nomeProprio = "Gabriel";
$nome1 = "Breno";
//Não é Possível esses caracteres - apenas underline
$_nomeProprio = "Olga";

$nomeCompleto = $nome1 . " " . $nomeProprio;

$this; // underline já definida

//apagar variável

echo $nomeCompleto;

echo "<br />";

unset($nome1);

if(isset($nome1)){

echo $nome1;

}

?>