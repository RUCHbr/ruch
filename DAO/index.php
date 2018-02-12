<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);*/

//Carrega Um usuário
/*$root = new Usuario();
$root->loadById(1);
echo $root;*/

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");

echo json_encode($search);

 ?>