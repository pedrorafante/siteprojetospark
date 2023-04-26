<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
      transition: all 0.7s ease-in-out;
    }

    body {
      height: 100vh;
      width: 100%;
      display: flex;
      justify-content: center;
      /*horizontal*/
      align-items: center;
      /*vertical*/
      background-color: rgb(208, 232, 254);
    }

    .container {
      width: 45%;
      height: 80vh;
      display: flex;
      flex-direction: row-reverse;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
    }

    .container:hover {
      box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.5);
    }

    .content {
      display: flex;
      width: 100%;
      background-color: rgba(255, 255, 255);
      justify-content: center;
      /*horizontal*/
      align-items: center;
      /*vertical*/
      flex-direction: column;
    }

    .header {
      display: flex;
      margin-bottom: 3rem;
    }

    .button-group {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .button-group button {
      cursor: pointer;
      width: 200px;
      height: 40px;
      margin-inline: 30px;
      margin-top: 20px;
      border: none;
      background-color: #5675ff;
      border-radius: 6px;
    }

    .button-group button a {
      text-decoration: none;
      font-weight: 550;
      color: white;
      padding: 0.8rem 5.4rem;
    }

    .button-group button:hover {
      background-color: white;
      box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.4);
      border: 2px solid rgba(0, 0, 0, 0.6);
    }

    .button-group button a:hover {
      color: black;
    }
  </style>
  <title>Deseja mudar a senha?</title>
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="header">
        <h1>Deseja mudar a senha?</h1>
      </div>
      <nav class="button-group">
        <div class="input-button">
          <button>
            <a href="esqueceusenha.php">Sim</a>
          </button>
        </div>
        <div class="input-button">
          <button><a href="login.php">Não</a></button>
        </div>
      </nav>
    </div>
  </div>
</body>

</html>