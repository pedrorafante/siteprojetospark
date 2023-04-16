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
    <div class="container">
        <div class="row">
            <main class="form-signin w-100 m-auto">


                <div class="col-md-6 offset-md-3 formcontainer">
                    <h1 class="d-flex justify-content-center mt-5">Sistema Tarefas</h1>
                    <form method="post" action="rotinas/auth.php" class="border rounded p-4 border-primary login-form">
                        <div class="mb-3">
                            <label for="login_email" class="form-label">E-mail</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="email" class="form-control" id="login_email" name="login_email" placehoder="E-mail" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="login_password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="login_password" name="login_password" required>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="login-btn" id="login-btn" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center">
                        <a href="">Esqueceu a Senha?</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        Não tem conta?&nbsp;&nbsp; <a href="register.php">Registre aqui!!</a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- ./Login Form -->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>