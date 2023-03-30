const usuarioCadastrado = 'danifloricultura@gmail.com'
const senhaCadastrada = '123456'
// const: variável cujo o valor é fixo

function login(event) {
  event.preventDefault()

  var usuarioDigitado = event.target.elements.usuario.value
  var senhaDigitada = event.target.elements.senha.value
  // dentro da função realiza-se a declaração das variáveis que irão receber uma ação ou evento

  if (usuarioDigitado == usuarioCadastrado && senhaDigitada == senhaCadastrada) 
    {
    window.location = './home.html' 
    } 
    else if (usuarioDigitado != usuarioCadastrado && senhaDigitada == senhaCadastrada) 
    {
      alert('Usuário inválido!')
    }
    else if (usuarioDigitado == usuarioCadastrado && senhaDigitada != senhaCadastrada) 
    {
      alert('Senha inválida!')
    } 
  else 
  {
    alert('Usuário ou senha inválida!')
  }
}

function logout() {
  window.location = './index.html'
}


function clickMenu() {
  if (itens.style.display == 'block') {
      itens.style.display = 'none'
  } else {
      itens.style.display = 'block'
  }
}


window.sr = ScrollReveal({reset: true});

sr.reveal('.dois', {duration: 1000});

sr.reveal('.um', {
  rotate: {x: 0, y: 80, z: 0},
  duration: 2000
});

sr.reveal('.dois', {
  rotate: {x: 100, y: 100, z: 0},
  duration: 2000,
});





