<?php
ini_set('display_erros', 1);
error_reporting(E_ALL);
$from = "pedro@projetospark.com.br";
$to = "pedrorafante@gmail.com";
$subj = "Testando Email";
$mensagem = "Teste";
$headers = "From: " . $from;
mail($to, $subj, $mensagem, $headers);
echo "Email enviado!";
