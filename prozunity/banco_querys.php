<?php
include 'conexao.php'; // Incluir a conexão com o banco de dados

// Receber os dados JSON
$data = json_decode(file_get_contents('php://input'), true);

$COD_ALUNO = $data['COD_ALUNO']; 
$name = $data['name'];
$login = $data['login'];
$senha = $data['senha'];
$email = $data['email'];

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);


$sqlConsulta = "SELECT * FROM USUARIO WHERE COD_ALUNO = ?";
$stmtConsulta = $conn->prepare($sqlConsulta);
$stmtConsulta->bind_param("i", $COD_ALUNO);

$stmtConsulta->execute();
$result = $stmtConsulta->get_result();
// Verifica se algum resultado foi retornado
if ($result->num_rows = 0) {
    // Preparar a SQL para inserção
    $sql = "INSERT INTO USUARIO (COD_ALUNO, nome, login, senha, email) VALUES (? , ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('issss',$COD_ALUNO, $name, $login, $senha, $email);
    // Executar a inserção
    if ($stmt->execute()) {
       echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    // Fechar a conexão
    $stmt->close();
}

$stmtConsulta->close();
$conn->close();
?>
