<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Recebe a página atual de quem inclui o menu
$current_page = isset($current_page) ? $current_page : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/menu.css">
    <title>Menu</title>
</head>
<body>
<nav id="sidebar">
    <div id="sidebar_content">
        <div id="user">
            <img src="../images/avatar_zoro.jpg" id="user_avatar" alt="Avatar do Usuário">

            <p id="user_infos">
                <?php if(isset($_SESSION['usuario'])): ?>
                    <span class="item-description">
                        <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                    </span>
                    <span class="item-description">
                        <?php 
                        // Categoria segura: se estiver vazia, mostra “Iniciante”
                        echo htmlspecialchars(!empty($_SESSION['programa_categoria']) ? $_SESSION['programa_categoria'] : 'Iniciante'); 
                        ?>
                    </span>
                <?php else: ?>
                    <span class="item-description">Visitante</span>
                    <span class="item-description">-</span>
                <?php endif; ?>
            </p>
        </div>

        <ul id="side_items">
            <li class="side-item <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
                <a href="dashboard.php">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="item-description">Dashboard</span>
                </a>
            </li>

            <li class="side-item <?= ($current_page == 'atividades.php') ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa-solid fa-book"></i>
                    <span class="item-description">Atividades</span>
                </a>
            </li>

            <li class="side-item <?= ($current_page == 'informacoes.php') ? 'active' : '' ?>">
                <a href="#">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="item-description">Informações</span>
                </a>
            </li>

            <li class="side-item <?= ($current_page == 'faq.php') ? 'active' : '' ?>">
                <a href="../paginas/faq.php">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="item-description">FAQ</span>
                </a>
            </li>

            <li class="side-item <?= ($current_page == 'configuracoespage.php') ? 'active' : '' ?>">
                <a href="configuracaopage.php">
                    <i class="fa-solid fa-gear"></i>
                    <span class="item-description">Configurações</span>
                </a>
            </li>
        </ul>

        <button id="open_btn">
            <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <form method="POST" action="logout.php" id="logout">
        <button id="logout_btn">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span>
        </button>
    </form>
</nav>

<script src="../javascript/menu.js"></script>
</body>
</html>
