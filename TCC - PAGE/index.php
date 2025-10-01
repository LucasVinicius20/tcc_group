<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Start Academy - HTML & CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="header-content">
            <div class="logo">Dev Start Academy</div>
            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#cursos">Cursos</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="#login" class="login-btn" id="open-login">Login</a></li>
                </ul>
            </nav>
            <button class="menu-toggle" aria-label="Abrir menu">☰</button>
        </div>
    </header>

    <!-- Seção Hero -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Aprenda HTML e CSS com Nossos Cursos</h1>
                <p>Construa sites com aulas práticas e projetos reais. Comece sua jornada hoje!</p>
                <a href="#cursos" class="hero-btn">Comece Agora</a>
            </div>
            <div class="hero-img">
                <img src="https://img.freepik.com/vetores-gratis/laptop-com-icone-de-codigo-isometrico-de-programa-desenvolvimento-de-software-e-aplicacoes-de-programacao-neon-escuro_39422-971.jpg?t=st=1746899618~exp=1746903218~hmac=1b90fe1ca649fbce56a18fbd6c61dd577741f4d230fa8dd7b5a3166c4db26fc0&w=826" alt="Ilustração de programação">
            </div>
        </div>
    </section>

    <!-- Seção de Cursos -->
    <section class="courses" id="cursos">
        <h2>Nossos Cursos</h2>
        <div class="courses-grid">
            <div class="course-card">
                <img src="https://prosimples.com/wp-content/uploads/2024/01/html.png" alt="Ilustração logo HTML">
                <h3>HTML Básico</h3>
                <p>Aprenda a estruturar páginas web com HTML do zero, com projetos práticos.</p>
                <a href="#ver-mais" class="course-btn">Ver mais</a>
            </div>
            <div class="course-card">
                <img src="https://prosimples.com/wp-content/uploads/2024/01/css-3.png" alt="Ilustração logo CSS">
                <h3>CSS Básico</h3>
                <p>Domine estilização, layouts responsivos e animações com CSS.</p>
                <a href="#ver-mais" class="course-btn">Ver mais</a>
            </div>
            <div class="course-card">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97" alt="Ícone Projetos">
                <h3>Projetos Reais</h3>
                <p>Construa sites completos combinando HTML e CSS em projetos reais.</p>
                <a href="#ver-mais" class="course-btn">Ver mais</a>
            </div>
        </div>
    </section>

    <!-- Seção de Sobre -->
    <section class="about" id="sobre">
        <h2>Sobre Nós</h2>
        <div class="about-card">
            <p>Somos alunos da Etec Adolpho Arruda Mello, cursando o Ensino Médio Integrado ao Técnico em Informática para Internet. Nosso grupo é formado por Lucas Vinicius Lourenço da Silva, Luana Souza Santos, Arthur da Costa Santos e Sophia Ferreira Coelho.
                Durante o nosso percurso acadêmico, adquirimos conhecimentos fundamentais nas áreas de desenvolvimento web, programação e novas tecnologias, buscando sempre aplicar o que aprendemos para criar soluções inovadoras. Este site é o resultado do nosso trabalho de Conclusão de Curso (TCC), no qual tivemos a oportunidade de explorar e desenvolver habilidades práticas que nos prepararão para os desafios do mercado de trabalho.
                Nosso objetivo é apresentar um projeto que una criatividade, conhecimento técnico e a capacidade de resolver problemas reais, sempre com foco em inovação e qualidade. Estamos muito felizes em compartilhar nossa jornada e nosso aprendizado com todos vocês!
                </p>
        </div>
    </section>

    <!-- Seção de Contato -->
    <section class="contact" id="contato">
        <h2>Entre em Contato</h2>
        <form class="contact-form" id="formContato">
            <input type="text" name="nome" placeholder="Seu Nome" required>
            <input type="email" name="email" placeholder="Seu Email" required>
            <textarea name="mensagem" placeholder="Sua Mensagem" rows="5" required></textarea>
            <button type="submit">Enviar Mensagem</button>
            <p class="form-status" id="statusMensagem"></p>
        </form>
    </section>

    <!-- Modal de Login -->
    <div class="modal-overlay" id="login-modal">
        <div class="modal-content">
            <button class="modal-close" id="close-login">×</button>
            <h2>Login</h2>
            <form method="POST" id="login-form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="seu.email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
                </div>
                <button type="submit" name="login" class="BtnLogin">Login</button>
                <p class="form-status" id="login-status"></p>
                <p class="form-link">Não tem uma conta? <a href="#cadastro" id="open-cadastro">Cadastre-se</a></p>
            </form>
        </div>
    </div>

    <!-- Modal de Cadastro -->
    <div class="modal-overlay" id="cadastro-modal">
        <div class="modal-content">
            <button class="modal-close" id="close-cadastro">×</button>
            <h2>Criar Conta</h2>
            <form method="POST" id="cadastro-form">
                <div class="form-group">
                    <label for="cadastro-nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome:">
                </div>
                <div class="form-group">
                    <label for="cadastro-email">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="seu.email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="cadastro-senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
                </div>
                <div class="form-group">
                    <label for="nivel">Conhecimento em Programação:</label>
                    <select name="nivel" id="nivel" required>
                        <option value="" disabled selected>Selecione seu nível</option>
                        <option value="iniciante">Iniciante</option>
                        <option value="medio">Médio</option>
                        <option value="avancado">Avançado</option>
                    </select>
                </div>
                <button type="submit" name="cadastrar" id="cadastrar" class="BtnLogin">Cadastrar</button>
                <p class="form-status" id="cadastro-status"></p>
                <p class="form-link">Já tem uma conta? <a href="#login" id="open-login-from-cadastro">Fazer Login</a></p>
            </form>
        </div>
    </div>

    <!-- Rodapé -->
    <footer id="footer">
        <div class="footer-content">
            <div class="footer-contact">
                <p>Email: descomolicadev@gmail.com</p>
                <p>Telefone: (11) 99999-9999</p>
            </div>
            <div class="footer-copyright">
                <p>© 2025 Dev Start Academy. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>