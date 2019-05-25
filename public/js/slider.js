$(document).ready(() => {

    let sliderComponent = $('.slider ul');

    sliderComponent.cycle({
        fx: 'scrollLeft',
        speed: 1000,
        timeout: 3000,
        prev: ".prev",
        next: ".next",
        pager: ".pager"
    });

});