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
    <title> Recuperação de Senha </title>
  </head>
  <body>
    <main id="container_rec2">
      <form id="recuperacao2_form">
        <div id="form_header">
          <h1>Recuperação <br> de Senha</h1>
          <i id="mode_icon" class="fa-regular fa-moon"></i>
        </div>
        <div id="inputs">
          <div calss="input_box">
            <label for="new_passord"> 
              Set your new password
              <div class="input-field">
                <i class="fa-solid fa-key fa-rotate-270"></i>
                <input typ="text" id="new_passord" name="new_passord">
              </div>

          <label for="new_passord2"> 
            Confirme your password
            <div class="input-field">
              <i class="fa-solid fa-key fa-rotate-270"></i>
              <input typ="text" id="new_passord2" name="new_passord2">
            </div>
          </label>
        </div>
        </div>
        <button type="submit" id="recuperacao2_button">
          Confirmar 
         </button>
      </form>
    </main>
    <script type="text/javascript" src="ASSETS/js/script4.js"></script>
  </body>
</html>
