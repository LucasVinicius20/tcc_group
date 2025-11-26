<?php
session_start();
require '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Dados recebidos
    $nome = trim($_POST['nome'] ?? null);
    $email = trim($_POST['email'] ?? null);
    $categoria_programa = trim($_POST['nivel'] ?? 'Iniciante');
    $user_id = $_SESSION['user_id'] ?? null;

    if (!$user_id) {
        echo "ID do usuário não encontrado na sessão.";
        exit;
    }

    // Buscar dados antigos para manter a foto caso o usuário NÃO envie uma nova
    $stmtOld = $pdo->prepare("SELECT imagem FROM usuarios WHERE id = ?");
    $stmtOld->execute([$user_id]);
    $userOld = $stmtOld->fetch(PDO::FETCH_ASSOC);
    $avatar = $userOld['imagem']; // padrão: manter a foto atual

    // ----- PROCESSAMENTO DO ARQUIVO ENVIADO (SE HOUVER) -----
    if (!empty($_FILES['file']['name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {

        if (!file_exists('../images_usuarios')) {
            mkdir('../images_usuarios', 0777, true);
        }

        $novoAvatar = uniqid() . "_" . basename($_FILES['file']['name']); // evita conflitos
        $destino = '../images_usuarios/' . $novoAvatar;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $destino)) {
            $avatar = $novoAvatar; // atualiza a foto
        } else {
            echo "Erro ao enviar a nova imagem de perfil.";
            exit;
        }
    }

    // ----- ATUALIZA NO BANCO -----
    try {
        $stmt = $pdo->prepare("
            UPDATE usuarios
            SET nome = ?, categoria_programa = ?, email = ?, imagem = ?
            WHERE id = ?
        ");
        $stmt->execute([$nome, $categoria_programa, $email, $avatar, $user_id]);

        // ----- RECARREGA DADOS PARA A SESSÃO -----
        $stmt2 = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt2->execute([$user_id]);
        $usuarioAtualizado = $stmt2->fetch(PDO::FETCH_ASSOC);

        $_SESSION['nome'] = $usuarioAtualizado['nome'];
        $_SESSION['email'] = $usuarioAtualizado['email'];
        $_SESSION['nivel'] = $usuarioAtualizado['categoria_programa'];
        $_SESSION['avatar'] = $usuarioAtualizado['imagem'];

        header('Location: dashboard.php');
        exit;

    } catch (PDOException $e) {
        echo "Erro ao atualizar os dados: " . $e->getMessage();
    }
}
?>