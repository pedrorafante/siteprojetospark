<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
    type="imagem/png"
    href="background/icons8-p-16.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Login</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <style>

            
        @font-face {
            font-family: 'retro';
            src: url('Anchora.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body, html {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            height: 100%;
            margin: 0;
            background-image: url('background/image.png');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius:5%;
        }

        .fonte {
            font-family: 'Lora';
        }

        .conteiner {

            background-color: transparent;
            width: 30rem;
            height: 93%;
            background-color:rgba(241, 116, 71, 0.555);
            opacity: 0.7;
            border-radius: 5%;
            display: flex;
            flex-direction: row-reverse; /* Alterado para uma coluna em dispositivos móveis */
            justify-content: center;
            align-items: center;
            padding: 20px; /* Aumentado o padding para melhorar a visualização em dispositivos móveis */
            max-width: 90%; /* Ajustado para ocupar a largura máxima do dispositivo */
            margin: 0 auto; /* Centralizado horizontalmente */
        }

        .background {
            width: 100%; /* Ajustado para ocupar toda a largura do conteiner */
            background-color: white;
            text-align: center;
            border-radius: 6%;
            padding: 20px;
            margin-bottom: 20px; /* Adicionado um espaçamento inferior */
        }

        .dados {
            display: flex;
            flex-direction: column; /* Alterado para uma coluna em dispositivos móveis */
            justify-content: center;
            align-items: center;
        }

        input {
            border: none;
            border-bottom: 1px solid #7115ad;
            width: 100%; /* Ajustado para ocupar toda a largura do conteiner */
            height: 3rem;
            border-radius: 10%;
            margin-bottom: 10px; /* Adicionado um espaçamento inferior */
        }

        ::-webkit-input-placeholder {
            text-align: center;
        }

        :-moz-placeholder {
            text-align: center;
        }

        ::-moz-placeholder {
            text-align: center;
        }

        :-ms-input-placeholder {
            text-align: center;
        }

        ::placeholder {
            font-size: 16px; /* Reduzido o tamanho do texto do placeholder */
            text-align: center;
            opacity: 0.6;
        }

        .toggle-password {
            position: relative;
            top: 40%;
            right: 0px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .entrar {
            border-radius: 20%;
            width: 100%; /* Ajustado para ocupar toda a largura do conteiner */
            border: none;
            border-bottom: 1px solid #7115ad;
            background-color: rgba(231, 129, 45, 0.993);
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            margin-top: 20px; /* Reduzido o espaço superior */
            cursor: pointer;
            transition: transform 0.2s;
        }

        .entrar:active {
            transform: scale(0.9);
        }

        .entrar-clicked {
            animation: click-animation 0.4s forwards;
        }

        @media screen and (max-width: 600px) {
            .conteiner {
                padding: 10px; /* Reduzido o padding */
                justify-content: center;
            }

            html{
                position: relative;
                justify-content: center;

            }

            .dados {
                width: 100%; /* Ajustado para ocupar toda a largura do conteiner */
            }

            input {
                width: 100%; /* Ajustado para ocupar toda a largura do conteiner */
            }

            .entrar {
                width: 100%; /* Ajustado para ocupar toda a largura do conteiner */
            }
        }


        @keyframes click-animation {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }


            #loading-screen {
                position: relative;
                width: 20%;
                height: 20%;
                background: transparent;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            #loader {
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid #3498db;
                width: 120px;
                height: 120px;
                -webkit-animation: spin 2s linear infinite; /* Safari */
                animation: spin 2s linear infinite;
            }

            @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }




    </style>
</head>
<body>
    <div class="conteiner" >
       <div class="background">
        <div class="dados">
        <form id="loginForm" method="post" class="form" >
            <div class="form-container">
                <h1 class="fonte">LOGIN</h1>
               
               
               <input type="text" id="username" placeholder="Usuário"> <p>
               <input type="password" id="password" placeholder="SENHA"> <p></p>
               <span class="toggle-password" onclick="togglePassword()">🐵 Mostrar Senha</span><p></p>
               <!-- <div class="g-recaptcha" data-sitekey="6Ld8s_8pAAAAAKg-gap4HA65BLKcsVgFpRScpEIL"></div> -->
               <!-- <button class="entrar" type="submit" onclick="return validar()">Entrar</button> -->
               
               <button class="entrar" type="submit" >Entrar</button>
               <p id="error-message"></p>
             </form>
            </div> 
        </div>
    </div>   

    


    <!--<popup id="loginForm" method="post" class="form" >
                        <div id="loading-screen">
                          <div id="loader"></div>
               </popup> -->


<script>
   function validar() {
     if (grecaptcha.getResponse() == ""){
        alert("Valide se você não é um robô 🤖");
        return false;
     }

   }
 </script>


<script>
            function checkOrientation() {
                if (window.innerHeight > window.innerWidth) {
                    // Orientação retrato
                    document.getElementById('orientation-message').style.display = 'none';
                } else {
                    // Orientação paisagem
                    document.getElementById('orientation-message').style.display = 'block';
                }
            }

            // Verificar a orientação na carga da página
            window.addEventListener('load', checkOrientation);

            // Verificar a orientação quando a tela é redimensionada
            window.addEventListener('resize', checkOrientation);


 </script>



    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.textContent = '🙈 Esconder Senha'; // Ícone de esconder senha
            } else {
                passwordInput.type = 'password';
                passwordIcon.textContent = '🐵 Mostrar Senha '; // Ícone de mostrar senha
            }
        }

        document.getElementById('loginForm').addEventListener('submit'), async function(event)
         { event.preventDefault();}
            
            
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorMessage = document.getElementById('error-message');

            window.addEventListener('load', function () {
             const loadingScreen = document.getElementById('loading-screen');
             const content = document.getElementById('content');

   
            loadingScreen.style.display = 'none';
            content.style.display = 'block';

            if (username === '' || password === '') {
                errorMessage.textContent ='Por favor, preencha todos os campos!';
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
                    window.location.href = 'home.php';
                } else {
                    errorMessage.textContent = 'Usuário ou senha inválidos.';
                }
            } catch (error) {
                errorMessage.textContent = 'Erro ao conectar com o servidor. Tente novamente mais tarde.';
            }
        });
    </script>

</body>
</html>
