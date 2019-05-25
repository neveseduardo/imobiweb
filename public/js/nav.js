$(document).ready(() => {
    
    $('.toggle-nav').click( e => {
        e.stopPropagation();
        let wrapper = $('.wrapper');        
        wrapper.toggleClass('show-nav');
        
        let i = $('.toggle-nav i');
        
        if(i.hasClass('fa-bars')){
            i.removeClass('fa-bars');
            i.addClass('fa-arrow-left');
        } else {
            i.removeClass('fa-arrow-left');
            i.addClass('fa-bars');
        }        
    });
});