$("#passo2").hide();
$("#passo3").hide();

$("#cpf").mask('000.000.000-00');
$("#cep").mask('00000-000');
$("#telefone").mask('(00) 00000-0000');

$('#passo1').submit(() => {
    event.preventDefault();
    $("#passo1").hide();
    $("#passo2").fadeIn(300);
});

$('#passo2').submit(() => {
    event.preventDefault();
    $("#passo2").hide();
    $("#passo3").fadeIn(300);
});
