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

                header("location:http://localhost/todo/home.php?username=$row[username]");
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
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];

if (isset($_POST['signup-btn'])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($password == $c_password) {
            $select = "SELECT * FROM users WHERE email = '$email'";
            $query = mysqli_query($conn, $select);
            $row = mysqli_fetch_assoc($query);
            if (!$row) {
                $insert = "INSERT INTO users(username, email, password, created_at, updated_at) VALUES ('$username','$email',md5($password),CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
                $query = mysqli_query($conn, $insert);
                if ($query) {
                    echo "<script>alert('Conta criada com Sucesso!!'); window.location='../index.php';</script>";
                } else {
                    echo "<script>alert('Algo deu errado! Tende novamente!'); window.location='../register.php';</script>";
                }
            } else {
                echo "<script>alert('Usuário já existe! Tente novamente'); window.location='../register.php';</script>";
            }
        } else {
            echo "<script>alert('As Senhas precisam ser iguais!!'); window.location='../register.php';</script>";
        }
    } else {
        echo "<script>alert('Email inválido!!'); window.location='../register.php';</script>";
    }
}
