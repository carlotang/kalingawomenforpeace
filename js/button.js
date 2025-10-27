$(document).ready(function () {

    $('.increment-btn').click(function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product-data').find('.input-qty').val();

        var value = parseInt(qty, 10);
        value = isNaM(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).closest('.product-data').find('.input-qty').val(value);
        }
    })
});