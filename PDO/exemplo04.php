<?php 

$conn = new PDO('mysql:host=localhost;dbname=dbphp7', "root", "");

$login = 'João';
$senha = 'a1b2c3';
$id = 1;

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario = :ID");

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASSWORD', $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados! OK!";

?>