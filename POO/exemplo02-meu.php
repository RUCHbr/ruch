<?php 

class Usuario{

	private $login;
	private $senha;
	private $idade;

	public function getLogin(){
		return $this->login;
	}
	public function setLogin($login){
		$this->login = $login;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getIdade(){
		return $this->idade;
	}
	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function cadastrar(){
		return array(
				"login"=>$this->getLogin(),
				"senha"=>$this->getSenha(),
				"idade"=>$this->getIdade()
			);
	}
}

$usuario = new Usuario();
$usuario->setLogin("RUCHbr");
$usuario->setSenha("qwerty");
$usuario->setIdade("18");

print_r($usuario->cadastrar());

 ?>