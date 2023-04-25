// Navigation
        // Responsive Toggle Navigation ============================
        let menuIcon = document.querySelector('.menuIcon');
        let nav = document.querySelector('.overlay-menu');

        menuIcon.addEventListener('click', () => {
            if (nav.style.transform != 'translateX(0%)') {
                nav.style.transform = 'translateX(0%)';
                nav.style.transition = 'transform 0.2s ease-out';
            } else { 
                nav.style.transform = 'translateX(-100%)';
                nav.style.transition = 'transform 0.2s ease-out';
            }
        });


        // Toggle Menu Icon ========================================
        let toggleIcon = document.querySelector('.menuIcon');

        toggleIcon.addEventListener('click', () => {
            if (toggleIcon.className != 'menuIcon toggle') {
                toggleIcon.className += ' toggle';
            } else {
                toggleIcon.className = 'menuIcon';
            }
        });





  //parar o carrossel
  $(document).ready(function() {
    // Seleciona o carrossel
    var carousel = $('.gallery');
    
    // Define o tempo de transição das imagens
    var transitionTime = 1000;
    
    // Define a função para parar a animação
    function stopCarousel() {
      gallery.stop(true, false);
    }
    
    // Define a função para reiniciar a animação
    function startCarousel() {
      cgallery.cycle({
        fx: 'fade',
        timeout: transitionTime
      });
    }
    
    // Adiciona o evento de mouseover para parar a animação
    gallery.on('mouseover', function() {
      stopCarousel();
    });
    
    // Adiciona o evento de mouseout para reiniciar a animação
    gallery.on('mouseout', function() {
      startCarousel();
    });
    
    // Inicia a animação
    startCarousel();
  });
  



  window.sr = ScrollReveal({reset: true});

sr.reveal('.dois', {duration: 3000});

sr.reveal('.um', {
  rotate: {x: 0, y: 80, z: 0},
  duration: 2000
});

sr.reveal('.tres', {
  rotate: {x: 100, y: 100, z: 0},
  duration: 2000,
});
