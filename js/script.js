const debounce = function(func, wait, immediate) {
    
    let timeout;
    
    return function(...args) {
      
        const context = this;
      
        const later = function () {
            timeout = null;
            
            if (!immediate) func.apply(context, args);
        
        };
        
        const callNow = immediate && !timeout;
        
        clearTimeout(timeout);
        
        timeout = setTimeout(later, wait);
        
        if (callNow) func.apply(context, args);
    
    };
  
};
  
  const target = document.querySelectorAll('[data-anime]');
  
  const animationClass = 'animate';
  
  function animeScroll() {
  
        const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
        
        target.forEach(function(element) {
        
            if((windowTop) > element.offsetTop) {
                
                element.classList.add(animationClass);
            } 
            
            else {
                
                element.classList.remove(animationClass);
            }
        
        })
}
  
  animeScroll();
  
  if(target.length) {
        
    window.addEventListener('scroll', debounce(function() {
    
        animeScroll();
    
    }, 100));
    
}

/* Digitador*/


function typeWriter(elemento) {
    
    const textoArray = elemento.innerHTML.split('');
    
    elemento.innerHTML = '';
    
    textoArray.forEach((letra, i) => {
        
        setTimeout(() => elemento.innerHTML += letra, 90 * i);
    
    });
}


const titulo1 = document.querySelector('#maquina');

typeWriter(titulo1);



$(document).ready(function(){
    $('.btn-menu').click(function(){
        
        $(".menu").toggleClass('active');
        $(this).toggleClass('active');
       
        
        });
    });