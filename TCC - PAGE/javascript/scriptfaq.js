document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;

            // Fecha todos os outros
            questions.forEach(q => {
                const otherAnswer = q.nextElementSibling;
                if (q !== question) {
                    q.classList.remove('active');
                    collapseAnswer(otherAnswer);
                }
            });

            // Alterna a atual
            question.classList.toggle('active');

            if (answer.style.height && answer.style.height !== '0px') {
                collapseAnswer(answer);
            } else {
                expandAnswer(answer);
            }
        });
    });

    function expandAnswer(answer) {
        answer.style.display = 'block';
        const fullHeight = answer.scrollHeight + "px";
        answer.style.height = fullHeight;
        answer.style.paddingTop = "15px";
        answer.style.paddingBottom = "15px";
    }

    function collapseAnswer(answer) {
        answer.style.height = '0';
        answer.style.paddingTop = "0";
        answer.style.paddingBottom = "0";
    }
});