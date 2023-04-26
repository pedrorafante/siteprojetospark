<?php
include 'db_connection.php';


// ========== Login  ==========

$email = $_POST['e-mail'];
$password = md5($_POST['password']);

if (isset($_POST['login_button'])) {
    //echo "ENTROU LOGIN " . $email. " - ".$password;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $select = "SELECT * FROM usuarios WHERE email = '{$email}'";
        
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        //echo "Senha digitada " .$password;
        //echo "<br>SENHA BANCO".  $row["senha"];

        if (!$row) {
            echo "<script>alert('E-mail não cadastrado!!'); window.location='../../index.php';</script>";
        } else {
        if ($password == $row["senha"]) {
            echo "<script> window.location='../../sucesso.php';</script>";;
         } else {
                echo "<script>alert('Senha incorreta, tente novamente!!'); window.location='../../index.php';</script>";
         }
        }
    
    }else {
         echo "<script>alert('E-mail incorreto!!'); window.location='../../cadastro.php';</script>";
    }

    
 
}


// ========== Cadastro de usuários  ==========
$name = $_POST['name'];
$email = $_POST['e-mail'];
$password = $_POST['password'];
$confirme = $_POST['confirme'];

if (isset($_POST['enviar_button'])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $select = "SELECT * FROM usuarios WHERE email = '$email'";
        $query = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($query);
        echo "EMAIL VALIDO";
    }else {
         echo "<script>alert('E-mail inválido!!'); window.location='../../cadastro.php';</script>";
    }

    if ($password == $confirme) {
        echo "senha correta";
     } else {
            echo "<script>alert('As Senhas precisam ser iguais!!'); window.location='../../cadastro.php';</script>";
     }
    
     if (!$row) {
        $insert = "INSERT INTO usuarios(nome, email, senha) VALUES ('$name','$email',md5($password))";
        $query = mysqli_query($conn, $insert);
        echo "usuario criado";
    } else {
        echo "<script>alert('Usuário já existe! Tente novamente'); window.location='../../cadastro.php';</script>";
    }
    
    if ($query) {
        echo "<script>alert('Conta criada com Sucesso!!'); window.location='../../index.php';</script>";
        print("NOME ". $name . "EMAIL ".$email. "password ".$password. "confirme ".$confirme );
    } else {
        echo "<script>alert('Algo deu errado! Tende novamente!'); window.location='../../cadastro.php';</script>";
        
    }
}








/*
if (isset($_POST['enviar_button'])) {
print ('ENTROU AKI');
print("NOME ". $name . "EMAIL ".$email. "password ".$password. "confirme ".$confirme );
}

if (isset($_POST['enviar_button'])) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($password == $confirme) {
            $select = "SELECT * FROM usuarios WHERE email = '$email'";
            $query = mysqli_query($conn, $select);
            $row = mysqli_fetch_assoc($query);
            if (!$row) {
                $insert = "INSERT INTO usuarios(nome, email, senha) VALUES ('$name','$email',md5($password))";
                $query = mysqli_query($conn, $insert);
                if ($query) {
                    //echo "<script>alert('Conta criada com Sucesso!!'); window.location='../index.php';</script>";
                    print("NOME ". $name . "EMAIL ".$email. "password ".$password. "confirme ".$confirme );
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
*/