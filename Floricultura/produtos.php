<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/BRosa v.jpeg">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Dani Floricultura</title>
</head>
<body>
    <nav id="navbar" class="">
        <div class="nav-wrapper">
          <!-- Navbar Logo -->
            
          <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <img src="img/logo 3.png" alt="foto">                     
          </div>
                  
        
          <!-- Navbar Links -->
          <ul id="menu">          
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>    
            <li><a href="imagem.php">Imagens</a></li>
            <li><a href="contato.php">Contatos</a></li>          
          </ul>
        </div>
    </nav>
              
    <!-- Menu Icon -->
    <div class="menuIcon">
        <span class="icon icon-bars"></span>
        <span class="icon icon-bars overlay"></span>
    </div>
        
        
    <div class="overlay-menu">
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="imagem.php">Imagens</a></li>  
            <li><a href="contato.php">Contatos</a></li>                 
        </ul>
      </div>  
      

      <?php
          include("conexao.php");
          $sql = "SELECT * FROM cadastro order by secao";

          $res = $conn->query($sql);
          $secao = "";
          $qtd = $res->num_rows;
          if ($qtd> 0){
           while ($row = $res->fetch_object()){
            if ($secao == "" || $secao != $row->secao){
              $secao = $row->secao;
              if ($secao != ""){ 
                print "</section>";
              }
              print " <section class='menu'>";
              print "<h1>".$row->secao."</h1>";
            } 
            
            print "<div class='item'>";
            print "<img class='um' src='".$row->url."' alt=''>";
            print "<h3>".$row->nome."</h3>";
            print "<p>".$row->descricao."</p>";
            print "<span>R$ ".$row->valor."</span>";
            print "</div>";
            

           }
          }else {
              print "<p class= 'alert-danger'> Não foram encontrados nenhum registro.</p>";
          }
      ?>
   
              
  <script src="script/script.js"></script>   
  <footer>
  <p>&copy; 2023 Dani Floricultura - Desenvolvido por: Daniela, Natália e Rinaldo</p>
  </footer>
</body>
</html>