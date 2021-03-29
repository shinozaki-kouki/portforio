window.addEventListener('DOMContentLoaded', (event) => {
    ScrollReveal().reveal('.scroll',{
        duration:"1000",
        viewFactor: 0.4, 
        reset: false,
    });   
    ScrollReveal().reveal('.box',{ 
        duration: "1500", 
        viewFactor: 0.6, 
        reset: false,
        origin:"left",
        distance:"150px",
    });
    ScrollReveal().reveal('.introduce',{ 
        duration: "1000", 
        viewFactor: 0.6, 
        reset: false,
        delay:"800",
    });
    });
                