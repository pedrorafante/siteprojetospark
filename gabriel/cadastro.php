<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/style/style cadastro.css" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <title>Página de Cadastro</title>
</head>

<body>
  <div class="container">
    <div class="img">
      <img src="assets/img/imgcadastro.svg" alt="imagem" class="imagem" />
    </div>
    <div class="formulario">
      <div class="form header">
        <div class="titulo">
          <h1>Cadastre-se</h1>
        </div>
        <nav>
          <div class="button">
            <button>
              <a href="index.php">Login</a>
            </button>
          </div>
        </nav>
      </div>
      <form method="post" action="rotinas/auth.php" target="_blank">
        <div class="input-group">
          <div class="input-box">
            <label for="nome">Nome Completo</label>
            <input type="text" id="username" name="username" placeholder="Digite seu nome completo" required />
          </div>
          <div class="input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu Email" required />
          </div>
          <div class="input-box">
            <label for="senha">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite a sua Senha" required />
          </div>
          <div class="input-box">
            <label for="confirmar">Confirmar Senha</label>
            <input type="password" id="c_password" name="c_password" placeholder="Digite novamente a senha" required />
          </div>
        </div>

        <div class="gender-box">
          <div>
            <h6>Gênero</h6>
          </div>
          <div class="gender-group">
            <div class="gender-input">
              <input id="female" type="radio" name="gender" />
              <label for="female">Feminino</label>
            </div>
            <div class="gender-input">
              <input id="male" type="radio" name="gender" />
              <label for="male">Masculino</label>
            </div>

            <div class="gender-input">
              <input id="others" type="radio" name="gender" />
              <label for="others">Outros</label>
            </div>

            <div class="gender-input">
              <input id="none" type="radio" name="gender" />
              <label for="none">Prefiro não dizer</label>
            </div>
          </div>
        </div>
        <div class="button-group">
          <div>
            <button type="submit" id="signup-btn" name="signup-btn"><span style="padding:0.8rem 2rem">Confirmar</span></button>
          </div>
          <div>
            <button type="reset"><span>Resetar</span></button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="assets/Js/signup.js"></script>
</body>

</html>