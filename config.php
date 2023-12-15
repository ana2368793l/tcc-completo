<?php

/* Credenciais do banco de dados. Supondo que você esteja executando o MySQL
servidor com configuração padrão (usuário 'root' sem senha) */
define('DB_SERVER', '179.42.88.21');
define('DB_USERNAME', 'estudante3a');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'testv');

/* Tentativa de conexão com o banco de dados MySQL */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}

$usuario= 'estudante3a';
$senha= 'root';
$database= 'testv';
$hostname= "179.42.88.21";

$mysqli= new mysqli($hostname,$usuario, $senha, $database);
if($mysqli-> connect_errno){
    echo 'Falha ao conectar: ('.$mysqli->connect_errno .')'.$mysqli->connect_error;
} 
$conexao = new PDO('mysql:host=179.42.88.21;dbname=testv', 'estudante3a', 'root');
?>

