<?php
include 'rotinas/db_connection.php';
if ($_SESSION['logged_in'] == true) {
    include 'rotinas/todo.php';

?>
    <!doctype html>
    <html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Tarefas</title>
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1"><?php echo $_SESSION['username']; ?></span>
                <div class="d-flex justify-content-end logout-btn"><a href="rotinas/logout.php">Sair</a></div>
            </div>
        </nav>
        <!-- ./Navbar -->

        <!-- Todo section  -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- add todo -->
                    <div id="add-btn" class=" d-flex justify-content-center mt-5">
                        <span class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Tarefa</span>
                    </div>
                    <div id="add-todo-form" class="mt-5">
                        <form action="rotinas/todo.php" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="add-todo" name="add-todo" placeholder="Digite a tarefa aqui">
                                <button class="btn btn-primary" name="add-todo-btn" id="add-todo-btn" type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                    <!-- ./add todo -->

                    <!-- todo table -->
                    <table class="table border rounded mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th class="text-center" scope="col">Tarefas</th>
                                <th class="text-center" scope="col">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sno = 1;
                            while ($row = mysqli_fetch_assoc($s_query)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $sno++; ?></th>
                                    <td class="text-center">
                                        <div class="task-list">
                                            <?php echo $row['tasks']; ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <form action="rotinas/todo.php?id=<?php echo $row['id']; ?>" method="post">
                                            <button class="btn btn-danger" name="dlt-todo-btn" id="dlt-todo-btn" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    <!-- ./todo table -->
                </div>
            </div>
        </div>
        <!-- ./Todo section  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#add-btn").click(function() {
                    $("#add-todo-form").toggle();
                });
            });
        </script>
    </body>

    </html>

<?php
} else {
    header("location:http://localhost/todo/index.php?msg=login_first");
}
?>