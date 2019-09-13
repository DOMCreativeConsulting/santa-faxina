$("#passo2juridico").hide();
$("#passo3juridico").hide();
$("#passo4juridico").hide();

$("#cpf").mask('000.000.000-00');
$("#cnpj").mask('00.000.000/0000-00');
$("#cep").mask('00000-000');
$("#telefone").mask('(00) 00000-0000');
$('#quantidade').mask('000000');

$('#passo1juridico').submit(() => {
    event.preventDefault();
    $("#passo1juridico").hide();
    $("#passo2juridico").fadeIn(300);
});

$('#passo2juridico').submit(() => {
    event.preventDefault();

    var dados = $('#passo1juridico').serialize() + '&' + $('#passo2juridico').serialize();

    $.post('cadastrar-juridico', dados);

    $("#passo2juridico").hide();
    $("#passo3juridico").fadeIn(300);
});

$('#passo3juridico').submit(() => {
    event.preventDefault();
});

$('#quantidade').keyup(() => {

    var quantidade = $('#quantidade').val();
    var modalidade = $('input[name=modalidade]:checked').val();
    var valor = quantidade * modalidade;

    $("#final").html(valor);
    $("#valor").val(valor);

});

$("input[name=modalidade]").change(() => {

    var quantidade = $('#quantidade').val();
    var modalidade = $('input[name=modalidade]:checked').val();
    var valor = quantidade * modalidade;

    $("#final").html(valor);
    $("#valor").val(valor);

});

$('#botao-passo3').click(() => {

    if($('#aceito').prop("checked") == true){

        if($('#quantidade').val() == '' || $('#quantidade').val() < 1){

            alert('Você deve informar a quantidade de profissionais.');

        }
        else{

            dadosEmail = $('#passo3juridico').serialize() + '&nome=' + $('#nome').val() + '&email=' + $('#email').val();
            $.post('enviar-email', dadosEmail);

            $("#passo3juridico").hide();
            $("#passo4juridico").fadeIn(300);

        }

    }else{

        alert('Você deve ler e aceitar os termos e condições do regulamento.')

    }

});
