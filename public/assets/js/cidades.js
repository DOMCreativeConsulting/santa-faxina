var cidades = [];

$('document').ready(() => {
    $.get('cidades')
        .done( data => {
            cidades = JSON.parse(data);
            const datalist = document.querySelector("#cidades");

            cidades.map(c => {
                const cidadeOption = document.createElement('option');
                cidadeOption.appendChild( document.createTextNode(c.nome) );
                datalist.appendChild(cidadeOption)
            });
        })
        .fail( error => console.error(error))
})

function teste(e) {
    const value = e.target.value;
    const resultado = cidades.filter(c => c.nome == value)[0];

    const input = document.querySelector("#COD_IBGE");
    input.value = resultado?.codigo || "000000000000";

    console.log('valor',value);
    console.log('função', cidades.filter(c => c.nome == value));
    console.log('resultado', resultado);
    console.log('input',input);
}