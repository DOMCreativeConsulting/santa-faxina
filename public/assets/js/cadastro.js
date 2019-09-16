$("#passo2").hide();
$("#passo3").hide();
$("#passo4").hide();
$("#passo5").hide();

$("#cpf").mask('000.000.000-00');
$("#cnpj").mask('00.000.000/0000-00');
$("#cep").mask('00000-000');
$("#telefone").mask('(00) 00000-0000');
$('#quantidade').mask('000000');

$('#passo1').submit(() => {

    event.preventDefault();

    var validacao = validaCpf();

    if(validacao == false){

        alert("Por favor digite um CPF válido!");

    }else{

        $("#passo1").hide();
        $("#passo2").fadeIn(300);

    }

});

$('#passo2').submit(() => {
    event.preventDefault();

    $("#passo2").hide();
    $("#passo3").fadeIn(300);
});

$('#passo3').submit(() => {
    event.preventDefault();
});

$('#quantidade').change(() => {

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

        if(isCaptchaChecked()){

            var dados = $('#passo1').serialize() + '&' + $('#passo2').serialize();
            $.post('cadastrar', dados);

            $("#passo3").hide();
            $("#passo4").fadeIn(300);

        }else{

            alert("Você deve preencher o reCAPTCHA 'Não sou um robô'");

        }

    }else{

        alert('Você deve ler e aceitar os termos e condições do regulamento.')

    }

});

$("#passo4").submit(() => {

    event.preventDefault();

    dadosEmail = $('#passo4').serialize() + '&nome=' + $('#nome').val() + '&email=' + $('#email').val();
    $.post('enviar-email', dadosEmail);

    $("#passo4").hide();
    $("#passo5").fadeIn(300);

});

function validaCpf(){

    var cpf = $("#cpf").val();

    strCPF = cpf.replace('.', '');
    var strCPF1 = strCPF.replace('.', '');
    var strCPF2 = strCPF1.replace('-', '');

    var Soma;
    var Resto;
    Soma = 0;

    if (
        strCPF2 == "00000000000" ||
        strCPF2 == "11111111111" ||
        strCPF2 == "22222222222" ||
        strCPF2 == "33333333333" ||
        strCPF2 == "44444444444" ||
        strCPF2 == "55555555555" ||
        strCPF2 == "66666666666" ||
        strCPF2 == "77777777777" ||
        strCPF2 == "88888888888" ||
        strCPF2 == "99999999999"
    ){
        return false;
    }

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF2.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF2.substring(9, 10)) ){
       return false;
    }

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF2.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF2.substring(10, 11) ) ) {
        return false;
    }

    return true;

}

function isCaptchaChecked() {
    return grecaptcha && grecaptcha.getResponse().length !== 0;
}