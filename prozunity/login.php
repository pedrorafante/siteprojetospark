<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Substitua estes valores pelos seus dados de usuário e senha
    $valid_username = 'admin';
    $valid_password = '12345';

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        echo '<script>alert("Usuário ou senha inválidos.");window.location.href="index.php";</script>';
    }
} else {
    header('Location: index.php');
    exit;
}
?>
