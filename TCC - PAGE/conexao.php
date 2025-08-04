<?php 
// Cabeçalho da API
header('Content-type: application/json');

// Conexão com o banco
$host = "localhost";
$db = "banco_api";
$user = "root";
$pass = "";

// Verifica a conexão com o banco e se der erro exibe a mensagem de erro
try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;", $user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo json_encode(['sucess' => false, 'message' => 'Erro de conexao: ' .$e->getMessage()]);
    exit;
}
?>