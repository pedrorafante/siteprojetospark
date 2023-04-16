<?php
// database Connection
$hostname = "projetospark.com.br:3306";
$username = "u751391022_todophp";
$password = "Admin123456";
$db =  "u751391022_todophp";

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$db =  "todophp";
try {
    $conn = new mysqli($hostname, $username, $password, $db);

    if ($conn->connect_error) {
        die("Erro de conexão com banco de dados" . $conn->connect_error);
    }

    session_start();
    error_reporting('1');
} catch (Exception $e) {
    print "Ocorreu um erro de conexão com banco de dados!";
    exit();
}
