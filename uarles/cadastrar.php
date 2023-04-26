<!DOCTYPE html>
<html lang="Pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=L, initial-scale=1.0">

    <link rel="stylesheet" href="./src/css/styli.css">

    <title>Cadastrar</title>
</head>

<body>
    <div class="fundo-video">
        <video class="video" autoplay loop muted>
            <source src="./video/video-mario.mp4" type="video/mp4" />
        </video>
    </div>

    <div id="corpo-form-cad">
        <h1>Cadastrar Senha</h1>
        <form method="POST" action="rotinas/auth.php">
            <input type="text" name="nome" id="nome" placeholder="Nome Completo">
            <input type="text" name="telefone" id="telefone" placeholder="Telefone">
            <input type="email" name="usuario" id="usuario" placeholder="Usuário">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input type="password" name="c_senha" id="c_senha" placeholder="Confirmar Senha">
            <input type="submit" name="signup-btn" id="signup-btn" value="Cadastrar">
            <a href="login.php"><strong>Fazer Login!</strong></a>

        </form>
    </div>

</body>

</html>