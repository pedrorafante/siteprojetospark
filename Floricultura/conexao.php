<?php
define('HOST', 'localhost');
define('USER', 'u751391022_rinaldo');
define('PASS', 'Rinaldo123');
define('BASE', 'u751391022_rinado');

$conn = new mysqli(HOST, USER, PASS, BASE);
$conn->set_charset('utf8');
//conexão com o banco para caracter especiais
