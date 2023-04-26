<?php
include 'db_connection.php';
$user_id = $_SESSION['user_id'];
// =========== Buscar todas as tarefas ==========
$select = "SELECT * FROM todolist WHERE user_id = '$user_id'";
$s_query = mysqli_query($conn, $select);

// =========== Adicionar Tarefas =========
/*$tasks = $_POST['add-todo'];
if (isset($_POST['add-todo-btn'])) {
    $insert = "INSERT INTO todolist(user_id, tasks, created_at, updated_at) VALUES ('$user_id','$tasks', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo "<script> window.location='../home.php';</script>";
    } else {
        // echo $user_id;
        echo "<script>alert('Ocoreu algum erro ao tentar incluir! Tente novamente..'); window.location='../home.php';</script>";
    }
}
// ============== Excluir tarefas ===========
if (isset($_POST['dlt-todo-btn'])) {
    $row_id = $_GET['id'];
    $delete = "DELETE FROM todolist WHERE id = $row_id";
    $d_query = mysqli_query($conn, $delete);
    if ($d_query) {
        echo "<script> window.location='../home.php';</script>";
    } else {
        echo "<script>alert('Ocoreu algum erro ao tentar excluir! Tente novamente..'); window.location='../home.php';</script>";
    }
}

