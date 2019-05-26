$(document).ready(() => {

    let btnBack = $('.btn-back');

    

    $('.body').scroll(() => {
        if($('.releases').offset().top < 0){
            btnBack.fadeIn();
        } else {
            btnBack.fadeOut();
        }
    });

    btnBack.click(e => {
        e.stopPropagation();
        $('.body').animate({scrollTop: 0}, 800);
    });

});
