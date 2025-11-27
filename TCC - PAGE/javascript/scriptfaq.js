document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll('.faq-question');

    questions.forEach(question => {
        question.addEventListener('click', () => {

            const answer = question.nextElementSibling;

            // FECHA TODAS AS OUTRAS PERGUNTAS
            questions.forEach(q => {
                const otherAnswer = q.nextElementSibling;
                if (q !== question) {
                    q.classList.remove('active');
                    otherAnswer.classList.remove('active');
                }
            });

            // ABRE/FECHA A ATUAL
            question.classList.toggle('active');
            answer.classList.toggle('active');
        });
    });
});
