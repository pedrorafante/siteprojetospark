<?php
// database Connection
$hostname = "localhost";
$username = "u751391022_trabalhologin";
$password = "Abcd123!";
$db =  "u751391022_trabalhologin";

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
