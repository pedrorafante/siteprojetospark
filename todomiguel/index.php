<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <section>
        <h1>Lista de Tarefas</h1>
        <div class="blocoAdicionar">
            <div class="adicionarTarefa">
                <form action="acoes.php?acao=inserir" method="POST" >
                    <input type="hidden" name="nome" placeholder="Adicionar nova tarefa."  class="inputTarefas">
                    <input type="text" name="sanfona" placeholder="Adicionar nova tarefa." class="inputTarefas" >

                    <input type="submit" value="+" class="botaoAdicionar">;
                </form>
                <p id="filtrar">Filtrar</p>
            </div>
        </div>  

        <div class="blocoTarefasAdicionadas">
        <!-- onclick="mostrarHistorico()" -->
        
            <i class="fa-solid fa-clock-rotate-left" onclick="location.href='acoes.php?acao=historico'"  id="icon"></i>
            <p id="tarefasAdicionadas">Suas Tarefas</p>
            <?php
                include("conexao.php");
                $sql = 'select * from tarefa where status = "A"';

                $res = $conn -> query($sql);

                $qtd = $res -> num_rows;

                if ($qtd > 0) {
                    
                while($row = $res-> fetch_object()) {
                    print "<div onclick='this.setAttribute(\"class\", \"concluida\")' ; class='novoContainer' ><p>".$row->descricao."</p><i class='fa-sharp fa-solid fa-trash' onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='acoes.php?acao=excluir&id=".$row->id."';} else {false;} \"></i></div>";
                }
           } 
    
        ?>



        </div>
        
        <div id="blocoFiltrar">
            <p id="tarefasAdicionadas">Filtrar</p>
            <div id="selecionar">
                <p id="tituloSecaoFiltrar">Selecionar <br> por 
                    <select name="" id="estadoTarefa"> 
                        <option value="Concluídas" id="option">Concluídas</option>
                        <option value="Pendentes" id="option">Pendentes</option>
                        <option value="Todas" id="option" selected>Todas</option>
                    </select>
                </p>
            </div>

            <div id="selecionar">
                <p id="tituloSecaoFiltrar">Selecionar<br> a partir 
                    <select name="" id=""> 
                        <option value="" id="option">Concluídas</option>
                        <option value="" id="option"> Pendentes</option>
                        <option value="" id="option"selected>Selecione</option>
                    </select>
                </p>
            </div>
            <input type="button" value="Aplicar" id="botaoAplicar">
        </div>

        
        <?php
        
        if  (isset($_REQUEST["acao"])) {
            //include("conexao.php");
            $sql2 = 'select * from tarefa where status = "E"';

            $res2 = $conn -> query($sql2);

            $qtd2 = $res2 -> num_rows;

            if ($qtd2 > 0) {
                print "<div id='blocoHistorico'>";
                print"<i class='fa-sharp fa-solid fa-xmark' id='iconFechar' onclick='blocoHistorico.setAttribute(\"class\", \"esconder\")'></i>";
                print"<p id='historico'>Histórico de Tarefas</p>";
                
                while($row2 = $res2-> fetch_object()) {
                    print"<div class='tarefasHistorico'>";
                    
                    print "<p>".$row2->descricao."</p>";
                
            }
            print"</div>";
         }
        }

        ?>

    </section>
    <script src="jquery.js"></script>
    <script src="https://kit.fontawesome.com/8f682f19ac.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer ></script>
</body>
</html>