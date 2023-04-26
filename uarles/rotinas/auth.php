<?php
include 'db_connection.php';


$login_email = $_POST['login_email'];
$login_password = md5($_POST['login_password']);

if (isset($_POST['login-btn'])) {
    if (filter_var($login_email, FILTER_VALIDATE_EMAIL)) {
        $select = "SELECT * FROM users WHERE email = '$login_email'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        if ($row) {
            if ($row['password'] == $login_password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['logged_in'] = true;

                header("location:http://projetospark.com.br/professor/home.php?username=$row[username]");
            } else {
                echo "<script>alert('Senha incorreta!!'); window.location='../index.php';</script>";
            }
        } else {
            echo "<script>alert('Usuário não encontrado!'); window.location='../index.php';</script>";
        }
    } else {
        echo "<script>alert('E-mail inválido!'); window.location='../index.php';</script>";
    }
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
