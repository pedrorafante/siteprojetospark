<?php


$email = $_POST["email"];

$sql = "INSERT INTO newlaster (email) VALUES('{$email}')";


$res = $conn->query($sql);
echo "<script>alert('Email cadastrado com sucesso!'); window.location='index.php';</script>";
