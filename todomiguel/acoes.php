<?php
include("conexao.php");

    switch ($_REQUEST["acao"]){
        case 'inserir':
            $descricao = $_POST["sanfona"];
            $sql = "INSERT INTO tarefa (descricao) values('{$descricao}');";
            $res = $conn -> query($sql);

            echo "<script>location.href='index.php'</script>";
            echo "<script>location.href='index.php?acao=blocoFiltrar'</script>";
            break;
        case 'excluir':            
            $sql = "UPDATE tarefa SET status = 'E' where id = {$_REQUEST['id']}";
            $res = $conn -> query($sql);
            echo "<script>location.href='index.php'</script>";
            break;
        case 'historico':
            // $sql = 'select * from tarefa where status = "E"';

            // $res = $conn -> query($sql);

            // $qtd = $res -> num_rows;

            // if ($qtd > 0) {
                
            // while($row = $res-> fetch_object()) {
                
            // }
            echo "<script>location.href='index.php?acao=historico'</script>";
            break;

    }
?>