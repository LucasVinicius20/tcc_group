<?php
session_start();

// Impede acesso sem usuário logado
if (!isset($_SESSION['usuario_id'])) {
    die("Usuário não autenticado.");
}

$usuario_id = $_SESSION['usuario_id'];
$pergunta_id = $_POST['pergunta_id'] ?? null;
$resposta = $_POST['resposta'] ?? null;
$resposta_correta = $_POST['correta'] ?? null;

if (!$pergunta_id || !$resposta || !$resposta_correta) {
    die("Erro: dados incompletos!");
}

$acertou = ($resposta === $resposta_correta) ? 1 : 0;

// Conexão com BD
$pdo = new PDO("mysql:host=localhost;dbname=quizdb;charset=utf8", "root", "");

$sql = "INSERT INTO respostas (usuario_id, pergunta_id, resposta_usuario, resposta_correta, acertou)
        VALUES (:usuario_id, :pergunta_id, :resposta_usuario, :resposta_correta, :acertou)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':usuario_id' => $usuario_id,
    ':pergunta_id' => $pergunta_id,
    ':resposta_usuario' => $resposta,
    ':resposta_correta' => $resposta_correta,
    ':acertou' => $acertou
]);

echo "salvo";
