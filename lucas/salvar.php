<?php

include 'config.php';
echo "<script>alert('1');</script>";
$email = $_POST["email"];
echo "<script>alert('2');</script>";
$sql = "INSERT INTO newlaster (email) VALUES('{$email}')";
echo "<script>alert('3');</script>";
$query = mysqli_query($conn, $sql);
echo "<script>alert('4');</script>";
if ($query) {
    echo "<script>alert('Email cadastrado com sucesso!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Algo deu errado! Tende novamente!'); window.location='index.php';</script>";
}
