<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="../styles/styleconfigura.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
        <header class="header">
            <h3>Configurações</h3>
        </header>

    <form method="POST" action="alterarconnfig.php" enctype="multipart/form-data">
        <main class="content">
            <section class="profile-photo">
                <div class="foto"></div>
                <div class="legendafoto">
                    <h5 id="upload-text">Alterar foto de perfil</h5>
                    <input type="file" id="file-input" name="file" hidden>
                </div>
            </section>

            <section class="input-fields">
                <fieldset>
                    <legend>Nome:</legend>
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome:">
                </fieldset>

                <fieldset>
                    <legend>Email:</legend>
                    <input type="email" name="email" id="email" required placeholder="seu.email@exemplo.com">
                </fieldset>

                <fieldset>
                    <legend>Conhecimento sobre Programação:</legend>
                    <select name="nivel" id="nivel" required>
                        <option value="" disabled selected>Selecione seu nível</option>
                        <option value="iniciante">Iniciante</option>
                        <option value="medio">Médio</option>
                        <option value="avancado">Avançado</option>
                    </select>
                </fieldset>

            <input class="save-button" type="submit">
        </main>

        <footer class="rodape"></footer>
    </form>
</div>
    

    <script src="../javascript/scriptconf.js"></script>
</body>
</html>