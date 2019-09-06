$("#passo2").animate({
    'opacity' : '0',
});
$('#botao-passo1').click(() => {
    $("#passo1").animate({
        'margin-right' : "50%",
        'opacity' : '0',
    },500);
});
$('#botao-passo1').click(() => {
    $("#passo2").animate({
        'opacity' : '1',
    },500);
});