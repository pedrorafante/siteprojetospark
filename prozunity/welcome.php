<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userData = JSON.parse(localStorage.getItem('userData'));
            if (!userData) {
                window.location.href = 'index.php';
            } else {
                document.getElementById('user-username').textContent = userData.username;
                document.getElementById('user-name').textContent = userData.name;
                document.getElementById('user-email').textContent = userData.email;
                document.getElementById('user-telephone').textContent = userData.telephone;
                document.getElementById('user-role').textContent = userData.role_in_words;
                document.getElementById('user-unit').textContent = userData.unit;
                document.getElementById('user-cpf').textContent = userData.cpf;
                document.getElementById('user-birthdate').textContent = userData.birthdate;
                document.getElementById('user-last-access').textContent = new Date(userData.last_acesss_at).toLocaleString();

                               
                const tokenButton = document.getElementById('token');
                tokenButton.setAttribute('href','https://enferminas.prozeducacao.com.br/academico/boletim1.php?' + userData.token);
                tokenButton.style.display = 'inline-block';
                
            }
        });

        function logout() {
            localStorage.removeItem('userData');
            window.location.href = 'index.php';
        }
    </script>
</head>
<body>
    <h1>Bem-vindo, <span id="user-name"></span>!</h1>
    <p>Code: <span id="user-username"></span></p>
    <p>Email: <span id="user-email"></span></p>
    <p>Telefone: <span id="user-telephone"></span></p>
    <p>Função: <span id="user-role"></span></p>
    <p>Unidade: <span id="user-unit"></span></p>
    <p>Data de Nascimento: <span id="user-birthdate"></span></p>
    <p>CPF: <span id="user-cpf"></span></p>
    <p>Último Acesso: <span id="user-last-access"></span></p>

    <p>
        <a id="token" href="#" style="display: none;">Notas</a>
    </p>
    
    <p><button onclick="logout()">Logout</button></p>
</body>
</html>
