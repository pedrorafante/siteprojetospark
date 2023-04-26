<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style login.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="img">
            <img src="assets/img/imglogin.svg" alt="imagem" class="imagem" />
        </div>
        <div class="formulario">
            <div class="form header">
                <div class="titulo">
                    <h1>Login</h1>
                </div>
                <nav>
                    <div class="button cadastro">
                        <button><a href="Cadastro.php">Cadastro</a></button>
                    </div>
                </nav>
            </div>
            <form method="post" action="rotinas/auth.php" target="_blank">
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Email:</label>
                        <input type="email" id="login_email" name="login_email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha:</label>
                        <input type="password" id="login_password" name="login_password" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <div class="button-group">
                    <button type="submit" name="login-btn" id="login-btn"><span>Confirmar</span></button>
                    <button type="reset"><span>Resetar</span></button>
                </div>
                <div class="esqueceu">
                    <a href="mudarsenha.php">Esqueceu a senha?</a>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/Js/signup.js"></script>
</body>

</html>