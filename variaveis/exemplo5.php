<?php

$nome = "Glaucio";

function teste() {
	global $nome;
	echo $nome . "<br />";
}

function teste2() {
	$nome = "João"; //uma não interfere na outra
	echo $nome." Agora no teste 2";
}

teste();
teste2();

?>