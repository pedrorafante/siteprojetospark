Servidor/conexao.phpdocument.getElementById('loginForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    if (username === '' || password === '') {
        errorMessage.textContent = 'Por favor, preencha todos os campos.';
        return;
    }

    try {
        let response = await fetch('https://api.prozeducacao.com.br/v1/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                username: username,
                password: password
            })
        });

        let data = await response.json();

        if (response.ok) {
            // Armazena os dados do usuário no localStorage
            localStorage.setItem('userData', JSON.stringify(data));
            window.location.href = 'welcome.php';
        } else {
            errorMessage.textContent = 'Usuário ou senha inválidos.';
        }
    } catch (error) {
        errorMessage.textContent = 'Erro ao conectar com o servidor. Tente novamente mais tarde.';
    }
});
