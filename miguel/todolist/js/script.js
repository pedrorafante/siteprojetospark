const botaoAdicionar = document.querySelector(".botaoAdicionar")
const valorInput = document.querySelector(".inputTarefas")
const blocoTarefas = document.querySelector(".blocoTarefasAdicionadas")
const filtrar = document.getElementById("filtrar")
const blocoHistorico = document.getElementById('blocoHistorico')


// Retorna um valor booleano, caso o input tenha um valor, retornará verdadeiro, senão, falso.
const validarInput = () =>  valorInput.value.trim().length > 0;

const adicionarTarefa = () =>{
    const inputValido = validarInput();
    // aqui o "!" representa "não", no caso SE o input NÃO for verdadeiro, ou seja, não for maior que 1, adiciona uma classe que deixará a borda do input vermelha.
    if(!inputValido){
        return valorInput.classList.add("inputError");
    } else{    
    }

    //adiciona uma nova DIV (novoContainer) que contém as tarefas no Bloco de Tarefas, já existente.
    const novoContainer = document.createElement('div')
    novoContainer.classList.add('novoContainer')

    //adiciona a nova tarefa, com o valor do input.
    const novaTarefa = document.createElement('p')
    novaTarefa.innerHTML = valorInput.value


    //adição do ícone deletar, usando o fontAwesome
    const trashIcon = document.createElement('i')
    trashIcon.classList.add('fa-sharp')
    trashIcon.classList.add('fa-solid')
    trashIcon.classList.add('fa-trash')
    
    //adiciona a nova tarefa e o ícone de deletar ao novoContainer.
    novoContainer.appendChild(novaTarefa)
    novoContainer.appendChild(trashIcon)

    
    //adiciona a bloco novoContainer, já com a tarefa e ícone dentro do bloco destinado.
    blocoTarefas.appendChild(novoContainer)

    //script que irá deletar a div.
    const deletarTarefa = () => {
        novoContainer.addEventListener("click", function() {
            this.parentNode.removeChild(this);
        });
    };

    //quando for clicado na lixeira, vai chamar a função "deletarTarefa" e excluir sua respectiva div.
    trashIcon.addEventListener("click", () => 
        deletarTarefa()
    );
    
    //Passa a mostrar a opção "Filtrar", que antes estava escondida com o display "none".
    filtrar.style.display = 'block';

    const blocoFiltrar = document.getElementById("blocoFiltrar")
    filtrar.addEventListener("click", () => 
        blocoFiltrar.style.display = 'block'
    )

    //Quando pressionado o botão para aplciar filtro, desaparece o bloco de filtro e executa a função.
    const botaoAplicar = document.getElementById('botaoAplicar')
    botaoAplicar.addEventListener("click", function(){
        blocoFiltrar.style.display = 'none'
    });

    const tarefas = document.querySelectorAll('.novoContainer');
    
    for (let i = 0; i < tarefas.length; i++) {
        tarefas[i].addEventListener('click', marcarConcluida);
    }
    
    function marcarConcluida(evento){
        evento.target.setAttribute('class', 'concluida')
    }
    
    //depois de adicionar uma tarefa, ele limpa o input e direciona o foco direto pra ele, para adicionar uma nova tarefa.
    valorInput.value = ''
    valorInput.focus()

        const select = document.getElementById('estadoTarefa')
        select.addEventListener("change", function() {
            const valorSelect = select.value;

            switch (valorSelect){
                case 'Concluídas':
                    //limpa as classes adicionadas anteriormente
                    novoContainer.classList.remove('aparecer')
                    novoContainer.classList.remove('esconder')

                    //se o elemento NÃO tiver a classe 'concluida', ou seja, não tiver sido clicada, adicione a classe esconder.
                    if(!novoContainer.classList.contains("concluida")){
                        document.getElementsByClassName = (novoContainer).classList.add('esconder')
                    } else{
                        document.getElementsByClassName = (novoContainer).classList.add('aparecer')
                    }
                break;
                case 'Pendentes':
                    novoContainer.classList.remove('aparecer')
                    novoContainer.classList.remove('esconder')

                    //se o elemento TIVER a classe 'concluida', foi clicada, adicione a classe esconder, e aparecer as classes 'novoContainer', criado por padrão.
                    if(novoContainer.classList.contains("concluida")){
                        document.getElementsByClassName = (novoContainer).classList.add('esconder')
                    } else{
                        document.getElementsByClassName = (novoContainer).classList.add('aparecer')
                    }
                break;
                case 'Todas':

                    //faz todos as tarefas terem a classe aparecer.
                    novoContainer.classList.add('aparecer')  
                break;
                default:
                    console.log('J.')
                break;     
            };
        });
    
        const tarefaHistorico = document.createElement('div');
        tarefaHistorico.setAttribute('id', 'tarefaHistorico');

        const tarefasDeletadas = document.createElement('p');
        tarefasDeletadas.innerHTML = novaTarefa.value;

        const recoverIcon = document.createElement('i')
        recoverIcon.classList.add('fa-solid')
        recoverIcon.classList.add('fa-upload')

        tarefaHistorico.appendChild(tarefasDeletadas);
        tarefaHistorico.appendChild(recoverIcon)

        blocoHistorico.appendChild(tarefaHistorico)

};

//Se o input tiver um valor maior que 1, ele removerá a borda de erro vermelha do input.
const removerErroInput = () =>{
    const inputValido = validarInput();
    if(inputValido){
        return valorInput.classList.remove("inputError");
    }
}

function mostrarHistorico(){
    blocoHistorico.style.display = 'block'    
}

function esconderHistorico(){
    blocoHistorico.style.display = 'none'    
}

botaoAdicionar.addEventListener("click", () => adicionarTarefa());
valorInput.addEventListener("change", () => removerErroInput());
