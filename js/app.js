document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(document).ready(() => {
    $('#btn-scroll-up').hide();
})

$(window).scroll(function (event) {
    let scroll = $(window).scrollTop();
    if(scroll > 408){
        $('#btn-scroll-up').fadeIn(300);
    } else {
        $('#btn-scroll-up').fadeOut(200);
    }
});
