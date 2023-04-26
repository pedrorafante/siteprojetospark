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
        <form method="POST">
            <input type="text" placeholder="Nome Completo">
            <input type="text" placeholder="Telefone">
            <input type="email" placeholder="Usuário">
            <input type="password" placeholder="Senha">
            <input type="password" placeholder="Confirmar Senha">
            <input type="submit" value="Cadastrar">
            <a href="index.php"><strong>Fazer Login!</strong></a>

        </form>
    </div>

</body>

</html>