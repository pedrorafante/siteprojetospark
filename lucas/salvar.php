<?php
$email = $_POST["email"];
$sql = "INSERT INTO newlaster (email) VALUES('{$email}')";


$res = $conn->query($sql);
print "<script>location.href='aa Página.php';</script>";
?>