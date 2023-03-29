function CriarCartao(){

    let nome = document.getElementById('nome'); 
    let nomeinput = document.getElementById('inputnome');
    let nomeValor = document.getElementById('inputnome').value;

    let profissao = document.getElementById('profissao');
    let profissaoValor = document.getElementById('inputprofissao').value;
    let inputprofissao = document.getElementById('inputprofissao');


    let contato = document.getElementById('contato');
    let contatoValor = document.getElementById('inputcontato').value;
    let contatoinput = document.getElementById('inputcontato');

  


    let email = document.getElementById('email');
    let emailValor = document.getElementById('inputemail').value;
    let emailinput = document.getElementById('inputemail');


    
    let nacionalidade = document.getElementById('opcaoNacionalidades')
    let opcaoValor = nacionalidade.options[nacionalidade.selectedIndex].value;
    let campoNacionalidade = document.getElementById('nacionalidade');


    let span = document.getElementById('span')
    let spancontato = document.getElementById('spancontato')
    let spanemail = document.getElementById('spanemail')

    let sexo = document.getElementById('radio')
    let sexoselected = document.getElementById

    
       
    if(nomeinput.value.length == 0 || contatoinput.value.length == 0 || emailinput.value.length == 0){
        nomeinput.style.borderBottom = 'red 1px solid'
        contatoinput.style.borderBottom = 'red 1px solid'  
        emailinput.style.borderBottom = 'red 1px solid'  
        span.style.display = 'block'  
        spancontato.style.display = 'block'
        spanemail.style.display = 'block'        
        } else{
            let button = document.getElementById('button');

            button.addEventListener('click', function() {
                button.value = 'Refazer cartão';
                button.style.border = '#5900ff solid 1px'
                button.style.color = '#5900ff'
                button.style.background = 'transparent'
                button
            });
            nome.innerHTML = `${nomeValor}`;
            profissao.innerHTML = ` ${profissaoValor}`;
            contato.innerHTML = `${contatoValor}`;
            email.innerHTML = `${emailValor}`;
            campoNacionalidade.innerHTML = `${opcaoValor}`;

            span.style.display = 'none'  
            spancontato.style.display = 'none'
            spanemail.style.display = 'none'     
            
           
            
            let buttonBaixar = document.getElementById('buttonBaixar')
            buttonBaixar.style.display = 'inline-block'
            
            
        }
        
}

function validar(){
    const nome = document.getElementById('inputnome')
    const spanNome = document.getElementById('span')
  
    if(nome.value.length >= 1){
        spanNome.style.display = 'none'
        nome.style.borderBottom = '1px solid black'
    } 
}

function validaremail(){
    const email = document.getElementById('inputemail')
    const spanEmail = document.getElementById('spanemail')
    
    if (email.value.length >= 1){
        spanEmail.style.display = 'none '   
        email.style.borderBottom = '1px solid black'
    }
}

function validarcontato(){
    const contato = document.getElementById('inputcontato')
    const spancontato = document.getElementById('spancontato')

    if (contato.value.length >= 1){
        spancontato.style.display = 'none '   
        contato.style.borderBottom = '1px solid black'
    }

}