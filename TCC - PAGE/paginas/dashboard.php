<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/dashboard.css">
    <title>Dev Start Academy - Dashboard</title>
</head>
<body>
    
    <nav id="sidebar">
        <div id="sidebar_content">
        <div id="user">
            <img src="../images/avatar_zoro.jpg" id="user_avatar" alt="Avatar do Usuário" width="200px">

            <p id="user_infos">
                <span class="item-description">
                    Roronoa Zoro
                </span>
                <span class="item-description">
                    Espadachim Verde
                </span>
            </p>
        </div>

        <ul id="side_items">

            <li class="side-items">
                <a href="#">
                    <i class="fa-solid fa-book"></i>
                    <span class="item-description">
                        Atividades
                    </span>
                </a>
            </li>

            <li class="side-items">
                <a href="#">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="item-description">
                        Informações
                    </span>
                </a>
            </li>

            <li class="side-items">
                <a href="#">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="item-description">
                        FAQ
                    </span>
                </a>
            </li>

            <li class="side-items">
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="item-description">
                        Configurações
                    </span>
                </a>
            </li>
        </ul>

            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span></span>
            </button>
        </div>
    </nav>

<script src="../javascript/dashboard.js"></script>
</body>
</html>