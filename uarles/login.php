<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=L, initial-scale=1.0">

    <link rel="stylesheet" href="./src/css/styli.css">

    <title>Login</title>
</head>

<body>
    <div class="fundo-video">
        <video class="video" autoplay loop muted>
            <source src="./video/video-mario.mp4" type="video/mp4" />
        </video>
    </div>

    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST" action="rotinas/auth.php">
            <input type="email" name="login_email" id="login_email" placeholder="Usuário">
            <input type="password" name="login_password" id="login_password" placeholder="Senha">
            <input type="submit" id="login-btn" name="login-btn" value="ACESSAR">
            <a href="./cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>

        </form>
    </div>


</body>

</html>