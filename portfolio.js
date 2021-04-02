window.addEventListener('DOMContentLoaded', (event) => {
    ScrollReveal().reveal('.scroll',{
        duration:"1000",
        viewFactor: 0.3, 
        reset: false,
        mobile: false,
    });   
    ScrollReveal().reveal('.introduce',{
        duration:"1000",
        viewFactor: 0.3, 
        reset: false,
        mobile: false,
    });   
    ScrollReveal().reveal('.box',{
        duration:"1000",
        viewFactor: 0.3, 
        reset: false,
        mobile: false,
    });  
    });
    $(function() {
        var pagetop = $('#js-scroll-fadein');   
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) { 
              pagetop.addClass("is-fadein");
            } else {
              pagetop.removeClass("is-fadein");
            }
        });
        pagetop.on("click",function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500); 
            return false;
        });
      });