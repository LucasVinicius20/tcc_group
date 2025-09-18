<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="stylesheet" href="../styles/styleconf.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <img src="../tela de configuração/imgs/arrow_back_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" alt="Voltar">
            <h3>Configurações</h3>
        </header>

        <main class="content">
            <section class="profile-photo">
                <div class="foto"></div>
                <div class="legendafoto">
                    <h5 id="upload-text">Alterar foto de perfil</h5>
                    <input type="file" id="file-input" hidden>
                </div>
            </section>

            <section class="input-fields">
                <fieldset>
                    <legend>Nome:</legend>
                    <input type="text" placeholder="Digite seu nome">
                </fieldset>

                <fieldset>
                    <legend>Sobrenome:</legend>
                    <input type="text" placeholder="Digite seu sobrenome">
                </fieldset>

                <fieldset>
                    <legend>Ocupação:</legend>
                    <input type="text" placeholder="Digite sua ocupação">
                </fieldset>
            </section>

            <button class="save-button">Salvar</button>
        </main>

        <footer class="rodape"></footer>
    </div>

    <script src="../javascript/scriptconf.js"></script>
</body>
</html>
