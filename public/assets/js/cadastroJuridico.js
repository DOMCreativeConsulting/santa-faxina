$("#passo2juridico").hide();
$("#passo3juridico").hide();
$("#passo4juridico").hide();
$("#passo5juridico").hide();

$("#cpf").mask('000.000.000-00');
$("#cnpj").mask('00.000.000/0000-00');
$("#cep").mask('00000-000');
$("#telefone").mask('(00) 00000-0000');
$('#quantidade').mask('000000');

$('document').ready(() => {
    $.get('cidades')
        .done( data => {
            const cidades = JSON.parse(data);
            const datalist = document.querySelector("#cidades");

            cidades.map(c => {
                const cidadeOption = document.createElement('option');
                cidadeOption.appendChild( document.createTextNode(c.nome) );
                cidadeOption.value = c.codigo; 
                datalist.appendChild(cidadeOption)
            });
        })
        .fail( error => console.error(error))
})

$('#passo1juridico').submit(() => {

    event.preventDefault();
    var validacao = validarCnpj();

    if(validacao == true ){
        $("#passo1juridico").hide();
        $("#passo2juridico").fadeIn(300);
    }else{
        alert("Por favor digite um CPF e um CNPJ válidos!");
    }

});

$('#passo2juridico').submit(() => {
    event.preventDefault();

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
        if(isCaptchaChecked()){
            var data = $('#passo1juridico').serialize() + '&' + $('#passo2juridico').serialize();
            console.log(data);
            $.post('cadastrar-juridico', data);
            $.post('entidade', data)
            .done(e =>  {
                $("#passo3juridico").hide();
                $("#passo4juridico").fadeIn(300);
            })
            .fail(e => alert("Não foi"));            
        }else{

            alert("Você deve preencher o reCAPTCHA 'Não sou um robô'");

        }

    }else{

        alert('Você deve ler e aceitar os termos e condições do regulamento.')

    }

});

$("#passo4juridico").submit(() => {

    event.preventDefault();

    dadosEmail = $('#passo4juridico').serialize() + '&nome=' + $('#nome').val() + '&email=' + $('#email').val();
    $.post('enviar-email', dadosEmail);

    $("#passo4juridico").hide();
    $("#passo5juridico").fadeIn(300);

});

function validarCnpj() {
    
    var cnpjInput = $("#cnpj").val();
    cnpj = cnpjInput.replace(/[^\d]+/g,'');
 
    if(cnpj == '') return false;
     
    if (cnpj.length != 14)
        return false;
 
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return false;
         
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}

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