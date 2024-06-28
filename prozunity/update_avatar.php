<?php
include 'conexao.php';

$data = json_decode(file_get_contents('php://input'), true);

$COD_ALUNO = $data['COD_ALUNO']; 
$avatar = $data['avatar'];
//Teste


$sql = "UPDATE USUARIO SET IMAGEM_AVATAR = ? WHERE COD_ALUNO = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issss',$avatar $COD_ALUNO);
        // Executar a inserção
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => $stmt->error]);
        }

        // Fechar a conexão
        $stmt->close();
        $conn->close();
?>