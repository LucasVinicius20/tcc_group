<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perguntas Frequentes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="../styles/stylefaq.css">
</head>

<body>

<div class="container">
    <h2>Perguntas frequentes:</h2>

    <div class="faq">

        <?php
        $faqs = [
            [
                "question" => "O que é HTML?",
                "answer" => "HTML (HyperText Markup Language) é a linguagem de marcação usada para estruturar o conteúdo de páginas da web. Ele define elementos como títulos, parágrafos, links, imagens e muito mais."
            ],
            [
                "question" => "O que é CSS?",
                "answer" => "CSS (Cascading Style Sheets) é a linguagem responsável pelo estilo visual de uma página web. Com ele, você pode mudar cores, fontes, espaçamentos, posicionamento de elementos e até criar animações."
            ],
            [
                "question" => "Preciso saber programar para aprender HTML e CSS?",
                "answer" => "Não! HTML e CSS não são linguagens de programação, mas sim de marcação e estilo. São ótimos pontos de partida para iniciantes que desejam entrar no mundo do desenvolvimento web."
            ],
            [
                "question" => "Preciso instalar algum programa para aprender?",
                "answer" => "Não necessariamente. Você pode começar apenas com um editor de texto como VS Code, Notepad++ ou até o Bloco de Notas e um navegador como Chrome ou Firefox para visualizar suas páginas."
            ],
            [
                "question" => "Qual é a diferença entre HTML e CSS?",
                "answer" => "HTML cria a estrutura e o conteúdo (o esqueleto da página). CSS cuida da aparência e do design (as roupas e estilos da página)."
            ],
            [
                "question" => "Quanto tempo leva para aprender HTML e CSS?",
                "answer" => "Depende do seu ritmo de estudo. Em poucas semanas é possível entender os conceitos básicos, mas a prática constante é essencial para dominar bem."
            ],
            [
                "question" => "Posso criar sites profissionais só com HTML e CSS?",
                "answer" => "Sim, mas com limitações. HTML e CSS criam páginas estáticas. Para interatividade e funções dinâmicas, usa-se JavaScript."
            ],
            [
                "question" => "HTML e CSS funcionam em todos os navegadores?",
                "answer" => "Sim, mas alguns estilos avançados podem apresentar diferenças. Sempre teste em mais de um navegador."
            ],
            [
                "question" => "O que são tags em HTML?",
                "answer" => "Tags são elementos usados para marcar e organizar o conteúdo. Exemplo: <h1> define títulos e <a> cria links."
            ],
            [
                "question" => "Qual a diferença entre id e class no HTML?",
                "answer" => "id é único e identifica um elemento específico. class pode ser reutilizada em vários elementos para aplicar estilos iguais."
            ]
        ];

        foreach ($faqs as $faq) {
            echo "<div class='faq-item'>";
            echo "<div class='faq-question'>{$faq['question']}</div>";
            echo "<div class='faq-answer'>" . nl2br(htmlspecialchars($faq['answer'])) . "</div>";
            echo "</div>";
        }
        ?>

    </div>

    <div class="contact-box">
        <p>Entre em contato pelo email:<br>
            <a href='mailto:descomolicadev@gmail.com'>descomolicadev@gmail.com</a>
        </p>
    </div>

</div>

<script src="../javascript/scriptfaq.js"></script>

</body>
</html>
