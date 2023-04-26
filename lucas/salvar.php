<?php

include 'config.php';
$email = $_POST["email"];
$sql = "INSERT INTO newlaster (email) VALUES('{$email}')";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>alert('Email cadastrado com sucesso!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Algo deu errado! Tende novamente!'); window.location='index.php';</script>";
}
