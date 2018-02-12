<?php 

$conn = new PDO('mysql:host=localhost;dbname=dbphp7', "root", "");

$login = 'Jose';
$senha = '12345';

$stmt = $conn->prepare("INSERT INTO tb_usuario(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASSWORD', $senha);

$stmt->execute();

echo "INSERIDO! OK!";

?>