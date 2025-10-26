<?php
session_start();
require '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $fotoperfil_usuario = isset($_POST['file']) ? $_POST['file']: null;
    $categoria_programa = trim($_POST['nivel'] ?? 'Iniciante');
    $user_id = $_SESSION['user_id'];
    $avatar = $_FILES['file']['name'];

    if (!$user_id) {
        echo "ID do usuário não foi fornecido.";
        exit;
    }

    if(is_uploaded_file($_FILES['file']['tmp_name'])):
        if(!file_exists('../images_usuarios')){
            mkdir('../images_usuarios');
        }
    endif;

    if(!move_uploaded_file($_FILES['file']['tmp_name'], '../images_usuarios/'. $avatar)){
        echo "Houve um erro ao gravar o arquivo na pasta";
    }

    try {
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, categoria_programa = ?, email = ?, imagem = ? WHERE id = ?");
        $stmt->execute([$nome, $categoria_programa ,$email, $avatar, $user_id]);

        $_SESSION['avatar'] = $avatar;
        header('Location: dashboard.php');
    } catch (PDOException $e) {
        echo "Erro ao atualizar os dados: " . $e->getMessage();
    }
}
?>
