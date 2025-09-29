<?php
// Importa a conexão com o banco de dados
require 'conexao.php';

// Inicia a sessão para armazenar dados do usuário logado
session_start();

// Recebe os dados via método POST
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;

// Valida se email e senha foram enviados
if (!$email || !$senha) {
    echo json_encode(['success' => false, 'message' => 'Email e senha são obrigatórios.']);
    exit;
}

try {
    // Verifica se é login ou cadastro
    if (isset($_POST['login'])) {
        // Validação de login
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            // pega o nome que veio do banco, não do POST
            $_SESSION['usuario'] = $user['nome'];
        
            echo json_encode([
                'success' => true,
                'message' => 'Login realizado com sucesso!'
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Email ou senha incorretos.']);
        }
    } elseif (isset($_POST['cadastrar'])) {
        // Verifica se o email já está cadastrado
        $sql = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->fetchColumn() > 0) {
            echo json_encode(['success' => false, 'message' => 'Este email já está cadastrado.']);
            exit;
        }

        // Cadastro de usuário
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Usuário cadastrado com sucesso!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erro ao cadastrar o usuário.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Ação inválida.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erro: ' . $e->getMessage()]);
}
?>