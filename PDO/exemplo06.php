<?php 

$conn = new PDO('mysql:host=localhost;dbname=dbphp7', "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Dados Excluídos! OK!";

?>