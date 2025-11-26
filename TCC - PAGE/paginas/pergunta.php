<?php
// PHP: Definição dos dados do quiz
$quiz_data = [
    [
        'pergunta' => '1/10: O que a tag &lt;button&gt;&lt;/button&gt; faz em um documento HTML?',
        'codigo' => "&lt;button&gt;Clique aqui&lt;/button&gt;",
        'respostas' => [
            'A) Cria um botão clicável na página.',
            'B) Insere um campo de texto para digitação.',
            'C) Adiciona um link para outro site.'
        ],
        'correta' => 'A'
    ],
    [
        'pergunta' => '2/10: O que o código abaixo representa?',
        'codigo' => "&lt;p&gt;Olá, mundo!&lt;/p&gt;",
        'respostas' => [
            'A) Um título principal.',
            'B) Um parágrafo simples de texto.',
            'C) Um botão clicável.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '3/10: Para que serve a tag &lt;img&gt;?',
        'codigo' => "&lt;img src=&quot;foto.jpg&quot; alt=&quot;Minha foto&quot;&gt;",
        'respostas' => [
            'A) Exibir uma imagem na página.',
            'B) Criar uma tabela.',
            'C) Inserir um vídeo externo.'
        ],
        'correta' => 'A'
    ],
    [
        'pergunta' => '4/10: O que a tag &lt;a&gt; faz neste código?',
        'codigo' => "&lt;a href=&quot;https://google.com&quot;&gt;Acessar Google&lt;/a&gt;",
        'respostas' => [
            'A) Exibe uma imagem.',
            'B) Cria um link para outra página.',
            'C) Cria um menu suspenso.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '5/10: Qual é a função da tag &lt;title&gt;?',
        'codigo' => "&lt;title&gt;Meu Site&lt;/title&gt;",
        'respostas' => [
            'A) Mostra um título dentro da página.',
            'B) Define o título exibido na aba do navegador.',
            'C) Insere um rodapé na página.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '6/10: O que este código representa no HTML?',
        'codigo' => "&lt;ul&gt;\n  &lt;li&gt;Item 1&lt;/li&gt;\n  &lt;li&gt;Item 2&lt;/li&gt;\n&lt;/ul&gt;",
        'respostas' => [
            'A) Uma lista ordenada.',
            'B) Uma lista sem ordem.',
            'C) Uma tabela com duas linhas.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '7/10: Para que serve o atributo lang na tag &lt;html&gt;?',
        'codigo' => "&lt;html lang=&quot;pt-BR&quot;&gt;",
        'respostas' => [
            'A) Define a cor do texto padrão.',
            'B) Indica o idioma do conteúdo.',
            'C) Carrega traduções automáticas.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '8/10: O que o meta charset faz?',
        'codigo' => "&lt;meta charset=&quot;UTF-8&quot;&gt;",
        'respostas' => [
            'A) Carrega arquivos de CSS.',
            'B) Define o conjunto de caracteres da página.',
            'C) Cria comentários visíveis.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '9/10: Qual é a finalidade da tag &lt;script&gt;?',
        'codigo' => "&lt;script&gt;\n  alert('Bem-vindo!');\n&lt;/script&gt;",
        'respostas' => [
            'A) Inserir um alerta de JavaScript.',
            'B) Estilizar o texto.',
            'C) Exibir uma imagem.'
        ],
        'correta' => 'A'
    ],
    [
        'pergunta' => '10/10: O que o elemento &lt;style&gt; faz no HTML?',
        'codigo' => "&lt;style&gt;\n  body { background: lightblue; }\n&lt;/style&gt;",
        'respostas' => [
            'A) Adicionar CSS diretamente no HTML.',
            'B) Remover todos os estilos do navegador.',
            'C) Criar um botão estilizado automaticamente.'
        ],
        'correta' => 'A'
    ],

    /* --- QUESTÕES DE CSS --- */

    [
        'pergunta' => '11/20: O que é CSS?',
        'codigo' => "p {\n  color: red;\n}",
        'respostas' => [
            'A) Uma linguagem de programação usada para interatividade.',
            'B) Uma linguagem de folhas de estilo usada para aplicar estilos a documentos HTML.',
            'C) Um banco de dados de configurações de estilo.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '12/20: O que o seguinte bloco CSS faz?',
        'codigo' => "p {\n  color: red;\n}",
        'respostas' => [
            'A) Seleciona todos os parágrafos e define sua cor vermelha.',
            'B) Seleciona apenas o primeiro parágrafo.',
            'C) Define a cor de todos os títulos h1.'
        ],
        'correta' => 'A'
    ],
    [
        'pergunta' => '13/20: Como incluir um arquivo CSS externo?',
        'codigo' => "&lt;link href=&quot;estilos/style.css&quot; rel=&quot;stylesheet&quot; /&gt;",
        'respostas' => [
            'A) &lt;style src=&quot;estilos/style.css&quot;&gt;&lt;/style&gt;',
            'B) &lt;link href=&quot;estilos/style.css&quot; rel=&quot;stylesheet&quot; /&gt;',
            'C) &lt;script src=&quot;estilos/style.css&quot;&gt;&lt;/script&gt;'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '14/20: O que é um seletor em CSS?',
        'codigo' => "p {\n  color: red;\n}",
        'respostas' => [
            'A) A propriedade a ser modificada.',
            'B) O valor da propriedade.',
            'C) O elemento HTML que será estilizado.'
        ],
        'correta' => 'C'
    ],
    [
        'pergunta' => '15/20: Para que servem as chaves { } no CSS?',
        'codigo' => "p {\n  color: red;\n}",
        'respostas' => [
            'A) Delimitar as declarações de estilo.',
            'B) Definir comentários.',
            'C) Criar seletores.'
        ],
        'correta' => 'A'
    ],
    [
        'pergunta' => '16/20: O que este seletor faz?',
        'codigo' => "p,\nli,\nh1 {\n  color: red;\n}",
        'respostas' => [
            'A) Estiliza apenas parágrafos.',
            'B) Estiliza p, li e h1.',
            'C) Estiliza toda a página.'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '17/20: Qual seletor aplica estilo por ID?',
        'codigo' => "#titulo {\n  color: red;\n}",
        'respostas' => [
            'A) .classe',
            'B) #id',
            'C) *'
        ],
        'correta' => 'B'
    ],
    [
        'pergunta' => '18/20: O que esta regra faz?',
        'codigo' => "html {\n  font-size: 10px;\n  font-family: 'Open Sans', sans-serif;\n}",
        'respostas' => [
            'A) Define fonte e tamanho para toda a página.',
            'B) Altera somente o body.',
            'C) Estiliza apenas parágrafos.'
        ],
        'correta' => 'A'
    ],
    [
        'pergunta' => '19/20: O que o código abaixo faz com a imagem?',
        'codigo' => "img {\n  display: block;\n  margin: 0 auto;\n}",
        'respostas' => [
            'A) Torna a imagem responsiva.',
            'B) Converte a imagem em inline.',
            'C) Centraliza a imagem horizontalmente.'
        ],
        'correta' => 'C'
    ],
    [
        'pergunta' => '20/20: O que é padding?',
        'codigo' => "p {\n  padding: 20px;\n}",
        'respostas' => [
            'A) Espaço externo ao elemento.',
            'B) Espaço interno entre conteúdo e borda.',
            'C) Cor do texto.'
        ],
        'correta' => 'B'
    ]
];

// PHP: Converte os dados do PHP para uma string JSON que o JavaScript pode ler
$quiz_json = json_encode($quiz_data);

// PHP: Configuração do layout
$arquivo_nome = "../styles/pergunta.css";
$total_atividades = count($quiz_data);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Atividades</title>
    <style>
        body {
    background-color: #e3e9f7; /* Azul médio */
    font-family: Arial, sans-serif;
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #0D1B3D; /* Azul escuro para texto */
    overflow: hidden;
}

.app-container {
    width: 90%;
    max-width: 900px;
    height: 90%;
    display: flex;
    flex-direction: column;
    padding: 20px;
    box-sizing: border-box;
}

/* --- HEADER --- */
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 20px;
    color: #1E3A8A; /* Azul escuro */
}

.header-left, .header-right {
    display: flex;
    align-items: center;
    font-size: 24px;
    cursor: pointer;
    width: 10%;
    justify-content: flex-start;
}

/* Barra de Progresso */
.progress-bar-container {
    display: flex;
    flex-grow: 1;
    justify-content: space-between;
    margin: 0 50px;
}

.progress-bar-item {
    flex-grow: 1;
    height: 4px;
    background-color: #7D95D6; /* Azul médio */
    margin: 0 5px;
    border-radius: 2px;
    transition: background-color 0.4s;
}

.progress-bar-item.active {
    background-color: #1E3A8A; /* Azul mais intenso */
}

/* --- CONTEÚDO CENTRAL --- */
.content-area {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.instruction-text {
    color: #0D1B3D; /* Azul escuro */
    font-size: 16px;
    margin-bottom: 30px;
    max-width: 450px;
}

/* Container do Quiz */
.quiz-container {
    width: 90%;
    max-width: 550px;
    position: relative;
}

/* Caixa de Código */
.code-box {
    position: relative;
    background-color: #3B5998; /* Azul escuro */
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    padding: 10px;
    margin-bottom: 30px;
}

.code-file-header {
    background-color: #2A4375; /* Azul mais escuro */
    padding: 5px 15px;
    border-radius: 6px;
    display: inline-block;
    font-size: 12px;
    color: #ffffff;
    position: absolute;
    top: -10px;
    left: 20px;
    font-weight: bold;
}

.code-file-header span {
    color: #FF5757; /* Mantém vermelho para destaque */
    margin-right: 5px;
}

.code-content {
    background-color: #5573C1; /* Azul médio */
    min-height: 120px;
    border-radius: 8px;
    padding: 20px;
    text-align: left;
    box-sizing: border-box;
    border: 1px solid #1E3A8A; 
    white-space: pre-wrap;
    font-family: 'Courier New', monospace;
    font-size: 14px;
    color: #ffffff; /* Texto branco */
}

/* OPÇÕES DE RESPOSTA */
.options-container {
    display: flex;
    justify-content: space-between;
    gap: 15px;
}

.option-button {
    flex-grow: 1; 
    background-color: #2A4375; /* Azul escuro */
    color: #ffffff;
    border: none;
    padding: 12px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    text-align: center;
    transition: background-color 0.3s;
}

.option-button:hover:not(:disabled) {
    background-color: #1E3A8A; /* Azul mais intenso */
}

/* Feedback */
.correct { background-color: #4CAF50 !important; } /* Verde */
.incorrect { background-color: #f44336 !important; } /* Vermelho */

/* Oculta atividades inativas */
.activity-content { display: none; }
.activity-content.active { display: block; }

/* --- CONTROLE INFERIOR --- */
.footer-controls {
    display: flex;
    justify-content: space-between;
    padding-top: 40px;
}

.nav-button {
    background-color: #1E3A8A; /* Azul intenso */
    color: white;
    padding: 10px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.nav-button.left { justify-self: flex-start; }
.nav-button.right { justify-self: flex-end; }

.nav-button:disabled {
    background-color: #7D95D6; /* Azul médio */
    cursor: not-allowed;
}
    </style>
</head>
<body>

    <div class="app-container">
        <div class="header">
            <div class="header-left">
                <span onclick="VoltarInicio()">&times;</span>
            </div>
            
            <span style="font-size: 20px; cursor: pointer;" onclick="navigate(-1)">&lt;</span>
            
            <div id="progressBar" class="progress-bar-container">
                </div>

            <span style="font-size: 20px; cursor: pointer;" onclick="navigate(1)">&gt;</span>
        </div>

        <div class="content-area">
            <p id="instructionText" class="instruction-text">
                </p>

            <div class="quiz-container">
                 <div id="activitiesWrapper">
                    </div>
            </div>
        </div>

        <div class="footer-controls">
            <button id="prevBtn" class="nav-button left" onclick="navigate(-1)">Voltar</button>
            <button id="nextBtn" class="nav-button right" onclick="navigate(1)">Avançar</button>
        </div>
    </div>

    <script>

        function VoltarInicio(){
            window.location.href = "dashboard.php"
        }
        // PHP INJETA OS DADOS AQUI! O JS lê a variável 'quizData'
        const quizData = <?php echo $quiz_json; ?>;
        
        // Estado do Quiz
        const activitiesWrapper = document.getElementById('activitiesWrapper');
        let currentActivity = 0;
        let userAnswers = Array(quizData.length).fill(null);
        const instructionTextElement = document.getElementById('instructionText');

        // --- Funções de Renderização e UI ---
        
        function renderActivities() {
            activitiesWrapper.innerHTML = ''; // Limpa o conteúdo
            
            quizData.forEach((activity, index) => {
                // 1. Cria a estrutura da atividade
                const activityDiv = document.createElement('div');
                activityDiv.classList.add('activity-content');
                activityDiv.setAttribute('data-correct', activity.correta);
                
                // 2. Monta o HTML da Caixa de Código (layout da imagem)
                const fileHeaderHtml = `
                    <div class="code-file-header">
                        <span>&#x25CF;</span> <?php echo $arquivo_nome; ?>
                    </div>`;

                const optionsHtml = activity.respostas.map((resposta) => {
                    const optionMatch = resposta.match(/([A-Z])\)/);
                    const optionLetter = optionMatch ? optionMatch[1] : '';
                    
                    // Adiciona o data-option para identificar a letra no JS
                    return `<button class="option-button" data-option="${optionLetter}" onclick="checkAnswer(this, '${optionLetter}')">${resposta}</button>`;
                }).join('');


                // 3. Monta o HTML final da Atividade
                activityDiv.innerHTML = `
                    <div class="code-box">
                        ${fileHeaderHtml}
                        <div class="code-content">${activity.codigo.replace(/\n/g, '<br>').replace(/ /g, '&nbsp;')}</div>
                    </div>
                    <div class="options-container">${optionsHtml}</div>
                `;

                activitiesWrapper.appendChild(activityDiv);
            });
            
            updateUI(); // Exibe a primeira atividade
        }

        function updateUI() {
            const activities = activitiesWrapper.querySelectorAll('.activity-content');
            
            // 1. Esconde/Mostra Atividade
            activities.forEach((activity, index) => {
                activity.classList.toggle('active', index === currentActivity);
            });
            
            // 2. Atualiza o Texto da Instrução
            instructionTextElement.innerHTML = quizData[currentActivity].pergunta;

            // 3. Atualiza a barra de progresso (os tracinhos)
            const progressBar = document.getElementById('progressBar');
            progressBar.innerHTML = ''; 
            
            for (let i = 0; i < quizData.length; i++) {
                const item = document.createElement('div');
                item.classList.add('progress-bar-item');
                // Tracinhos ativos até a posição atual
                if (i <= currentActivity) {
                    item.classList.add('active');
                }
                progressBar.appendChild(item);
            }

            // 4. Habilita/Desabilita os botões de Avançar/Voltar
            document.getElementById('prevBtn').disabled = currentActivity === 0;
            document.getElementById('nextBtn').disabled = currentActivity === quizData.length - 1;

            restoreActivityState();
        }

        // --- Funções de Interação ---

        function navigate(direction) {
            const newIndex = currentActivity + direction;
            if (newIndex >= 0 && newIndex < quizData.length) {
                currentActivity = newIndex;
                updateUI();
            }
        }

        function checkAnswer(selectedButton, selectedOption) {
            const currentActivityElement = activitiesWrapper.querySelectorAll('.activity-content')[currentActivity];
            const correctOption = currentActivityElement.dataset.correct;
            const buttons = currentActivityElement.querySelectorAll('.option-button');

            // 1. Desabilita todos os botões e salva a resposta
            buttons.forEach(button => {
                button.disabled = true;
                button.classList.remove('correct', 'incorrect');
            });
            userAnswers[currentActivity] = selectedOption;

            // 2. Aplica as cores de feedback
            buttons.forEach(button => {
                const option = button.dataset.option;
                if (option === correctOption) {
                    button.classList.add('correct');
                } else if (option === selectedOption && option !== correctOption) {
                    button.classList.add('incorrect');
                }
            });
        }
        
        function restoreActivityState() {
            const currentActivityElement = activitiesWrapper.querySelectorAll('.activity-content')[currentActivity];
            const buttons = currentActivityElement.querySelectorAll('.option-button');
            const savedAnswer = userAnswers[currentActivity];
            
            if (savedAnswer) {
                const correctOption = currentActivityElement.dataset.correct;
                
                buttons.forEach(button => {
                    const option = button.dataset.option;
                    
                    button.disabled = true;
                    button.classList.remove('correct', 'incorrect');

                    if (option === correctOption) {
                        button.classList.add('correct');
                    } else if (option === savedAnswer && option !== correctOption) {
                        button.classList.add('incorrect');
                    }
                });
            } else {
                 // Se não há resposta, garante que os botões estão ativos
                buttons.forEach(button => {
                    button.disabled = false;
                    button.classList.remove('correct', 'incorrect');
                });
            }
        }

        // Inicializa a renderização do quiz ao carregar a página
        document.addEventListener('DOMContentLoaded', renderActivities);
    </script>
</body>
</html>
