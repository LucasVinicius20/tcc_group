document.addEventListener('DOMContentLoaded', () => {
    // Menu hamburguer
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav ul');
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // Modal de login
    const loginBtn = document.getElementById('open-login');
    const loginModal = document.getElementById('login-modal');
    const closeLogin = document.getElementById('close-login');
    const loginForm = document.getElementById('login-form');
    const loginStatus = document.getElementById('login-status');

    // Modal de cadastro
    const cadastroBtn = document.getElementById('open-cadastro');
    const cadastroModal = document.getElementById('cadastro-modal');
    const closeCadastro = document.getElementById('close-cadastro');
    const cadastroForm = document.getElementById('cadastro-form');
    const cadastroStatus = document.getElementById('cadastro-status');
    const openLoginFromCadastro = document.getElementById('open-login-from-cadastro');

    // Abrir modal de login
    loginBtn.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.classList.add('active');
        cadastroModal.classList.remove('active');
        loginStatus.textContent = '';
        loginForm.reset();
    });

    // Fechar modal de login
    closeLogin.addEventListener('click', () => {
        loginModal.classList.remove('active');
        loginStatus.textContent = '';
    });

    // Fechar modal de login ao clicar fora
    loginModal.addEventListener('click', (e) => {
        if (e.target === loginModal) {
            loginModal.classList.remove('active');
            loginStatus.textContent = '';
        }
    });

    // Abrir modal de cadastro
    cadastroBtn.addEventListener('click', (e) => {
        e.preventDefault();
        cadastroModal.classList.add('active');
        loginModal.classList.remove('active');
        cadastroStatus.textContent = '';
        cadastroForm.reset();
    });

    // Fechar modal de cadastro
    closeCadastro.addEventListener('click', () => {
        cadastroModal.classList.remove('active');
        cadastroStatus.textContent = '';
    });

    // Fechar modal de cadastro ao clicar fora
    cadastroModal.addEventListener('click', (e) => {
        if (e.target === cadastroModal) {
            cadastroModal.classList.remove('active');
            cadastroStatus.textContent = '';
        }
    });

    // Abrir modal de login a partir do cadastro
    openLoginFromCadastro.addEventListener('click', (e) => {
        e.preventDefault();
        loginModal.classList.add('active');
        cadastroModal.classList.remove('active');
        cadastroStatus.textContent = '';
        loginStatus.textContent = '';
        loginForm.reset();
    });

    // Submissão do formulário de login via AJAX
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(loginForm);
        formData.append('login', 'true'); // Garante que o campo login seja enviado

        fetch('criarUsuario.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            loginStatus.textContent = data.message;
            loginStatus.classList.toggle('error', !data.success);
            if (data.success) {
                loginForm.reset();
                setTimeout(() => {
                    loginModal.classList.remove('active');
                    loginStatus.textContent = '';
                    window.location.href = 'paginas/dashboard.php';
                }, 1500);
            }
        })
        .catch(error => {
            loginStatus.textContent = 'Erro ao processar a solicitação.';
            loginStatus.classList.add('error');
        });
    });

    // Submissão do formulário de cadastro via AJAX
    cadastroForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(cadastroForm);
        formData.append('cadastrar', 'true'); // Garante que o campo cadastrar seja enviado

        fetch('criarUsuario.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            cadastroStatus.textContent = data.message;
            cadastroStatus.classList.toggle('error', !data.success);
            if (data.success) {
                cadastroForm.reset();
                setTimeout(() => {
                    cadastroModal.classList.remove('active');
                    cadastroStatus.textContent = '';
                }, 1500);
            }
        })
        .catch(error => {
            cadastroStatus.textContent = 'Erro ao processar a solicitação.';
            cadastroStatus.classList.add('error');
        });
    });

    // Formulário de contato
    document.getElementById('formContato').addEventListener('submit', function (e) {
        e.preventDefault();
        const status = document.getElementById('statusMensagem');
        status.textContent = 'Enviando...';
        setTimeout(() => {
            status.textContent = 'Mensagem enviada com sucesso! Obrigado pelo contato.';
            this.reset();
        }, 1000);
    });
});