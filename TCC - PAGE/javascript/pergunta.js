let currentIndex = 0;

const questionElement = document.getElementById('question');
const optionsContainer = document.getElementById('options');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

function renderQuestion() {
    const current = quizData[currentIndex];
    questionElement.textContent = current.pergunta;

    optionsContainer.innerHTML = '';
    ['A','B','C','D'].forEach(letter => {
        if(current['opcao_'+letter]) {
            const btn = document.createElement('button');
            btn.classList.add('option-button');
            btn.textContent = `${letter}) ${current['opcao_'+letter]}`;
            btn.onclick = () => checkAnswer(btn, letter, current.correta);
            optionsContainer.appendChild(btn);
        }
    });

    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === quizData.length - 1;
}

function checkAnswer(selectedButton, option, correta) {
    const buttons = document.querySelectorAll('.option-button');
    buttons.forEach(btn => btn.disabled = true);

    if(option === correta) {
        selectedButton.classList.add('correct');
    } else {
        selectedButton.classList.add('incorrect');
        buttons.forEach(btn => {
            if(btn.textContent.startsWith(correta)) btn.classList.add('correct');
        });
    }
}

prevBtn.addEventListener('click', () => { currentIndex--; renderQuestion(); });
nextBtn.addEventListener('click', () => { currentIndex++; renderQuestion(); });

renderQuestion();

function checkAnswer(selectedButton, option, correta) {
    const buttons = document.querySelectorAll('.option-button');
    buttons.forEach(btn => btn.disabled = true);

    // Marca visual
    if(option === correta) {
        selectedButton.classList.add('correct');
    } else {
        selectedButton.classList.add('incorrect');
        buttons.forEach(btn => {
            if(btn.textContent.startsWith(correta)) btn.classList.add('correct');
        });
    }

    // ---- Salvar no banco ----
    fetch("../paginas/salvar_resposta.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: `pergunta_id=${quizData[currentIndex].id}&resposta=${option}&correta=${correta}`
    });
}
