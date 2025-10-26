<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/information.css">
    <title>Dev Start Academy - Informações</title>
</head>

    <main>
        <div class="info-page">
        <h1>Informações</h1>

        <div class="info-grid">
            <div class="info-box">
            <h2>O que é HTML e CSS?</h2>
            <p>
                HTML (Linguagem de Marcação de Hipertexto/HyperText Markup Language) é uma das linguagens
                de programação mais simples da Web e é a linguagem que muitos escolhem como a sua primeira
                para aprender. Ela define o significado e a estrutura de uma página da Web. Já CSS
                (Folhas de Estilo em Cascata/Cascading Style Sheets) é usada com o HTML para estilizar
                sua estrutura — com animações, bordas, fontes diferentes e muito mais.
            </p>
            </div>

            <div class="info-box">
            <h2>Como HTML e CSS são utilizados no mercado de trabalho?</h2>
            <p>
                HTML e CSS são essenciais no mercado de trabalho para programadores de Web.
                HTML é a base da Web e o CSS torna as páginas mais atraentes, definindo a aparência visual.
                Juntas, essas linguagens permitem criar sites profissionais e modernos.
            </p>
            </div>

            <div class="info-box">
            <h2>Quais linguagens devo aprender após HTML e CSS?</h2>
            <p>
                JavaScript (JS) é a principal recomendação para sua próxima linguagem de programação.
                Ele dá vida às páginas, criando interações e funcionalidades dinâmicas.
                Outras boas opções incluem C# (Csharp) e XAML, amplamente usados no mercado.
            </p>
            </div>
        </div>
        </div>
    </main>
</body>
</html>