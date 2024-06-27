<?php
$url = parse_url("mysql://root:BMqrfbGYgqwjnHFZxmdnDZpebHCPSnrP@monorail.proxy.rlwy.net:24210/railway");

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);
$port = $url["port"];

// Inicializa a conexão MySQLi
$conn = mysqli_init();
mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

// Conecta ao banco de dados
if (!mysqli_real_connect($conn, $host, $username, $password, $database, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connect Error: " . mysqli_connect_error());
}

?>
