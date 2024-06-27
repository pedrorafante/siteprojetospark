<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
        a {
            color: #007BFF;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-button {
            background-color: #6c757d;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
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
                
                document.getElementById('user-cpf').textContent = userData.cpf;
                document.getElementById('user-birthdate').textContent = userData.birthdate;
                
                   }
        });

        function logout() {
            localStorage.removeItem('userData');
            window.location.href = 'index.php';
        }

        function goBack() {
            window.location.href = 'mural/mural.php';
        }
    </script>
</head>
<body>
    
    <div class="container">
        <h1>Dados Cadastrais</h1>
        <p>Code: <span id="user-username"></span></p>
        <p>Nome: <span id="user-name"></span></p>
        <p>Email: <span id="user-email"></span></p>
        <p>Telefone: <span id="user-telephone"></span></p>
        <p>Data de Nascimento: <span id="user-birthdate"></span></p>
        <p>CPF: <span id="user-cpf"></span></p>
        
       
        
        <button onclick="logout()">Logout</button>
        <button class="back-button" onclick="goBack()">Voltar</button>
    </div>
</body>
</html>


