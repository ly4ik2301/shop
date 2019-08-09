$(function () {
    $('.count').change(function () {

        var id = $(this).attr('data_id');
        var price = $('#price_'+id).text();
        var count = $(this).val();
        var summa = price * count;
        console.log(id, price, count, summa);
        $('#summa_' + id).text(summa);
itog();
    });
    function itog() {
        var itog = Number(0);
        $('.summa').each(function () {
            itog+=Number($(this).text());
        });
        $('#itog').text(itog);
        return itog;
    }
});