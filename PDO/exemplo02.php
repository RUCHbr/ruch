<?php 

define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'dbphp7' );


try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

$nome = 'Bill Gates';
$site = 'http://microsoft.com';
$sql = "INSERT INTO programadores(nome, site) VALUES(:nome, :site)";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':nome', $nome );
$stmt->bindParam( ':site', $site );
 
$result = $stmt->execute();
 
if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}
 
echo $stmt->rowCount() . "linhas inseridas";

?>