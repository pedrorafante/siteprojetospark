<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Tarefas</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Signup Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 formcontainer ">
                <h1 class="d-flex justify-content-center mt-5">Cadastro de Login</h1>

                <form method="post" action="rotinas/auth.php" class="border rounded p-4 border-primary login-form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="c_password" class="form-label">Confirme a senha</label>
                        <input type="password" class="form-control" id="c_password" name="c_password" required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" id="signup-btn" name="signup-btn" class="btn btn-primary d-flex justify-content-center">Registrar</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center">
                    Já possui conta? &nbsp;<a href="index.php"> Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Signup Form -->

    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>