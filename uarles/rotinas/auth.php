<?php
include 'db_connection.php';


$login_email = $_POST['login_email'];
$login_password = md5($_POST['login_password']);

if (isset($_POST['login-btn'])) {

    $select = "SELECT * FROM usuario WHERE usuario = '$login_email'";
    $query = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($query);
    if ($row) {
        echo "<script>alert('" . $login_password . "');</script>";
    } else {
        echo "<script>alert('caralho');</script>";
    }

    // if ($row) {
    //     if ($row['senha'] == $login_password) {
    //         echo "<script>alert('Login efetuado com sucesso!');</script>";
    //     } else {
    //         echo "<script>alert('Senha incorreta!!'); window.location='../index.php';</script>";
    //     }
    // } else {
    //     echo "<script>alert('Usuário não encontrado!'); window.location='../index.php';</script>";
    // }
}

// ========== Cadastro de usuários  ==========
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$c_password = $_POST['c_senha'];
$telefone = $_POST['telefone'];

if (isset($_POST['signup-btn'])) {
    if ($senha == $c_password) {
        $select = "SELECT * FROM usuario WHERE usuario = '$usuario'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        if (!$row) {
            $insert = "INSERT INTO usuario(usuario, nome, senha, telefone) VALUES ('$usuario','$nome',md5($senha),'$telefone')";
            $query = mysqli_query($conn, $insert);
            if ($query) {
                echo "<script>alert('Conta criada com Sucesso!!'); window.location='../index.php';</script>";
            } else {
                echo "<script>alert('Algo deu errado! Tende novamente!'); window.location='../cadastrar.php';</script>";
            }
        } else {
            echo "<script>alert('Usuário já existe! Tente novamente'); window.location='../cadastrar.php';</script>";
        }
    } else {
        echo "<script>alert('As Senhas precisam ser iguais!!'); window.location='../cadastrar.php';</script>";
    }
}
