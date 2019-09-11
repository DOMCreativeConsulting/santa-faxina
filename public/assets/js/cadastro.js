$("#passo2").hide();
$("#passo3").hide();
$("#passo4").hide();

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

    var dados = $('#passo1').serialize() + '&' + $('#passo2').serialize();

    $.post('cadastrar', dados);

    $("#passo2").hide();
    $("#passo3").fadeIn(300);
});

$('#botao-passo3').click(() => {

    if($('#aceito').prop("checked") == true){

        if($('#quantidade').val() == '' || $('#quantidade').val() < 1){

            alert('Você deve informar a quantidade de profissionais.');

        }
        else{

            $("#passo3").hide();
            $("#passo4").fadeIn(300);

        }

    }else{

        alert('Você deve ler e aceitar os termos e condições do regulamento.')

    }

});

$('#quantidade').keyup(() => {

    var quantidade = $('#quantidade').val();
    var modalidade = $('input[name=modalidade]:checked').val();

    var valor = quantidade * modalidade;

    $("#final").html(valor);

});

$("input[name=modalidade]").change(() => {

    var quantidade = $('#quantidade').val();
    var modalidade = $('input[name=modalidade]:checked').val();

    var valor = quantidade * modalidade;

    $("#final").html(valor);

});

$('#quantidade').mask('000000');
