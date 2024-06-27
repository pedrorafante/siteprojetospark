<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
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
            text-align: center;
        }
        h1 {
            color: #333;
        }
        button {
            width: 200px;
            padding: 10px;
            margin: 10px;
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
        .logout-button {
            background-color: #FF4B5C;
        }
        .logout-button:hover {
            background-color: #CC0000;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userData = JSON.parse(localStorage.getItem('userData'));
            if (!userData) {
                window.location.href = 'index.php';
            }
        });

        function logout() {
            localStorage.removeItem('userData');
            window.location.href = 'index.php';
        }

        function goToNotas() {
            const userData = JSON.parse(localStorage.getItem('userData'));
            if (userData && userData.re_enroll_path) {
                const url1 = userData.re_enroll_path;
                const url = `https://enferminas.prozeducacao.com.br/academico/boletim1.php?${userData.re_enroll_path.split('?')[1]}`;
                const win1 = window.open(url1, '_blank');

                setTimeout(function() {
                    window.location.href = url;
                    win1.close();
                }, 5000);
            } else {
                alert('Token não encontrado.');
            }
        }


function teste() {
    window.open("www.google.com.br", "_blank");
    window.open("www.gmail.com.br", "_blank");
}

    </script>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo</h1>
        <button onclick="window.location.href='dados.php'">Tela de Dados</button>
        <button onclick="window.location.href='mural/mural.php'">Mural</button>
        <button onclick="goToNotas()">Notas</button>
        <p><button class="logout-button" onclick="logout()">Logout</button></p>
        
    </div>
</body>
</html>
