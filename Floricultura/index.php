<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="shortcut icon" href="img/BRosa v.jpeg">
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

    <div class="texto_a">
      <p>A Dani Floricultura trabalha com flores naturais e artificiais,
      e possui um variado mix em flores, para presentes criativos
      para todas as ocasiões. Valorizando a interação com os apaixonados
      por plantas e decoração, potencializando o bem da relação entre as
      plantas, um ambiente decorado, acolhedor e sua familiar.</p>
    </div>
 

  <?php
  include("conexao.php");
  $sql = "SELECT * FROM cadastro where secao = 'Arranjos'";

  $res = $conn->query($sql);
  $secao = "";
  $i = 1;
  $qtd = $res->num_rows;
  print "<h2>Arranjos</h2>";
  print "<div class='gallery'>";
  if ($qtd > 0) {
    while ($row = $res->fetch_object()) {
      print " <span style='--i:" . $i . "'>
        <a href='imagem.php?page=" . $row->id . "'><img src='" . $row->url . "' alt='' /></a>
      </span>";
      $i++;
    }

    print "</div>";

  } else {
    print "<p class= 'alert-danger'> Não foram encontrados nenhum registro.</p>";
  }
  ?>

  <?php

  $sql = "SELECT * FROM cadastro where secao = 'Buquê'";

  $res = $conn->query($sql);
  $secao = "";
  $i = 1;
  $qtd = $res->num_rows;
  print "<h2>Buquê</h2>";
  print "<div class='gallery'>";
  if ($qtd > 0) {
    while ($row = $res->fetch_object()) {
      print " <span style='--i:" . $i . "'>
        <a href='imagem.php?page=" . $row->id . "'><img src='" . $row->url . "' alt='' /></a>
      </span>";
      $i++;
    }

    print "</div>";

  } else {
    print "<p class= 'alert-danger'> Não foram encontrados nenhum registro.</p>";
  }
  ?>


  <script src="script/script.js"></script>


  <footer>
    <div>
      <p>&copy; 2023 Dani Floricultura - Desenvolvido por: Daniela, Natália e Rinaldo</p>
    </div>
  </footer>



</body>

</html>