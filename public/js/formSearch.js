$(document).ready(() => {

    let priceRange = $('.form-search .formgroup.price input[type=range]');
    let areaRange = $('.form-search .formgroup.area input[type=range]');
    let priceInput = $('.form-search .formgroup.price input[type=number]');
    let areaInput = $('.form-search .formgroup.area input[type=number]');

    priceRange.on('input', function () {
        priceInput.val(this.value);
    });
    
    areaRange.on('input', function () {
        areaInput.val(this.value);
    });


});

