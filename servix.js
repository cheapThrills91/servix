$(document).ready(function() {
    getUrl();
  });


function getUrl() {
    var pathname = window.location.pathname;

    switch (pathname) {
        case "/":
            carouselFotosHome();
            carouselServicosHome();
            break;
        case "/solucoes-servicos/":
            console.log("serviços");
            break;            
        case "/parceiros/":
            parceiros();
            break;
    }   
}

function carouselFotosHome() {
    //ajusta paginação -> colocar id na paginação <carousel-with-bullets.php>
    $('#paginacao').css('margin-left','-965px'); 
}

function carouselServicosHome() {
    //fix altura carousel servicos home
    $('.carousel-icons-text .icon').css("margin","20px auto");
}

function parceiros() {
    //remover tooltip parceiros <parceiros-accordion.php>
    $('.parceiros-tooltips').hide(); 
}




 


