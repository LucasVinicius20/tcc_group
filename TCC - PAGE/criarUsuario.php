<?php
require 'conexao.php';
session_start();

// Recebe os dados via POST
$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$categoria_programa = trim($_POST['nivel'] ?? 'Iniciante'); // valor padrão caso não seja enviado

// Valida email e senha
if (!$email || !$senha) {
    echo json_encode(['success' => false, 'message' => 'Email e senha são obrigatórios.']);
    exit;
}

try {
    // ===== LOGIN =====
    if (isset($_POST['login'])) {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            $_SESSION['usuario'] = $user['nome'] ?? 'Usuário';
            $_SESSION['user_id'] = $user['id'] ?? 'id';
            $_SESSION['avatar'] = $user['imagem'] ?? 'imagem';
            // Garante que categoria_programa tenha valor
            $_SESSION['programa_categoria'] = !empty($user['categoria_programa']) ? $user['categoria_programa'] : 'Iniciante';

            echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Email ou senha incorretos.']);
        }

    // ===== CADASTRO =====
    } elseif (isset($_POST['cadastrar'])) {
        if (!$nome) {
            echo json_encode(['success' => false, 'message' => 'Nome é obrigatório.']);
            exit;
        }

        // Verifica email duplicado
        $sql = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->fetchColumn() > 0) {
            echo json_encode(['success' => false, 'message' => 'Este email já está cadastrado.']);
            exit;
        }

        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

        // Inserção no banco
        $sql = "INSERT INTO usuarios (nome, email, senha, categoria_programa) 
                VALUES (:nome, :email, :senha, :categoria_programa)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);
        $stmt->bindParam(':categoria_programa', $categoria_programa);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Usuário cadastrado com sucesso!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erro ao cadastrar o usuário.']);
        }

    // ===== AÇÃO INVÁLIDA =====
    } else {
        echo json_encode(['success' => false, 'message' => 'Ação inválida.']);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erro: ' . $e->getMessage()]);
}