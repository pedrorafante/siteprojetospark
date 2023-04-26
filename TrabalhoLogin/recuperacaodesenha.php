<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="ASSETS/css/style.css">
    <title> Recuperação de senha </title>
  </head>
  <body>
    <main id="container_rec">
      <form id="recuperacao_form">
        <div id="form_header">
          <h1>Recuperação <br> de senha</h1> 
          <i id="mode_icon" class="fa-regular fa-moon"></i>
        </div>
        <div id="inputs">
          <div calss="input_box">
            <label for="recuperacao"> 
              Informe seu  E-mail para recuperar a senha:
              <div class="input-field">
                <i class="fa-solid fa-key fa-rotate-270"></i>
                <input typ="text" id="recuperacao" name="recuperacao">
              </div>
            </label>
          </div>
        <button type="submit" id="recuperacao_button">
          Recuperar senha 
         </button>
      </form>
    </main>
    <script type="text/javascript" src="ASSETS/js/script3.js"></script>
  </body>
</html>
