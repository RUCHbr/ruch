<?php 

//Primeira Letra Maiúscula

class Pessoa{
	//Atributos
	public $nome;

	//método
	public function falar(){
		//$this para fazer referência dentro do método, referencia atributos e métodos dentro de outros métodos
		return "O meu nome é ".$this->nome;
	}
}

$breno = new Pessoa();
$breno->nome = "Breno Borges";
echo $breno->falar();

 ?>