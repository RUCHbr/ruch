<?php 

$conn = new PDO('mysql:host=localhost;dbname=dbphp7', "root", "");

$id = 1;

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Excluídos! OK!";

?>