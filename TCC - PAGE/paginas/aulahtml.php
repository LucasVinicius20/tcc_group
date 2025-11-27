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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Mural de Aulas</title>
  <link rel="stylesheet" href="../styles/aulahtml.css">
</head>
<body>
  
  <main>
    <a href="http://localhost/TCC%20-%20PAGE/paginas/sos%20certo/index.php">
    <section id="aulas-section">
      <article class="aula">
        <div class="aula-imagem" style="background-image: url('../images/HTML.png');"></div>
        <h2 class="titulo">Aula HTML</h2>
        <p class="aula-texto"></p>
      </article>

      <article class="aula">
        <div class="aula-imagem" style="background-image: url('../images/CSS.png');"></div>
        <h2 class="titulo">Aula CSS</h2>
        <p class="aula-texto"></p>
      </article>

      <article class="aula">
        <div class="aula-imagem" style="background-image: url('../images/');"></div>
        <h2 class="titulo">Aula HTML e CSS</h2>
        <p class="aula-texto"></p>
      </article>
    </section>
    </a>
  </main>
</body>
</html>