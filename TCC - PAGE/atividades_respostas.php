<?php
include 'conexao.php'; 

$id_usuario = $_POST['id_usuario'];
$id_atividade = $_POST['id_atividade'];
$codigo_enviado = $_POST['codigo_enviado'];

// busca resposta certa
$stmt = $pdo->prepare("SELECT resposta_correta FROM atividades WHERE id_atividade = ?");
$stmt->execute([$id_atividade]);
$atividade = $stmt->fetch(PDO::FETCH_ASSOC);

$resposta_correta = trim($atividade['resposta_correta']);
$resposta_user = trim($codigo_enviado);

// verifica
if ($resposta_user === $resposta_correta) {
    $resultado = "Correto";
    $pontos_ganhos = 10;
} else {
    $resultado = "Incorreto";
    $pontos_ganhos = 0;
}

// registra na tabela respostas
$stmt = $pdo->prepare("
    INSERT INTO respostas (id_usuario, id_atividade, codigo_enviado, resultado)
    VALUES (?, ?, ?, ?)
");
$stmt->execute([$id_usuario, $id_atividade, $codigo_enviado, $resultado]);

// atualiza pontos e atividades completas
$stmt = $pdo->prepare("
    UPDATE usuarios
    SET pontos = pontos + ?, atividades_completas = atividades_completas + 1
    WHERE id = ?
");
$stmt->execute([$pontos_ganhos, $id_usuario]);

//atualiza conquista 
$stmt = $pdo->prepare("SELECT pontos FROM usuarios WHERE id = ?");
$stmt->execute([$id_usuario]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$pontos_totais = $user['pontos'];

// pega maior conquista possível
$stmt = $pdo->query("
    SELECT nome_conquista
    FROM conquistas
    WHERE pontos_minimos <= $pontos_totais
    ORDER BY pontos_minimos DESC
    LIMIT 1
");
$conquista = $stmt->fetch();

// atualizar campo de categoria no usuário (caso use)
$stmt = $pdo->prepare("
    UPDATE usuarios
    SET categoria_programa = ?
    WHERE id = ?
");
$stmt->execute([$conquista['nome_conquista'], $id_usuario]);
echo json_encode([
    "status" => "ok",
    "resultado" => $resultado,
    "pontos_ganhos" => $pontos_ganhos
]);
exit;
?>