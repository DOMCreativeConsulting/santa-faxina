<form id="passo4">
    <div class="row" id="passo4" style="margin-bottom:100px;">
        <div class="col-md-10 offset-md-1 box" style="padding-bottom:100px;">
            <h1 class="title">
                Cadastro de Cliente Residencial
                <small><br>Passo 4</small>
            </h1>
            <div class="multi-step">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step-active"></span>
                <span class="step"></span>
            </div>
            <div class="row" style="text-align:center;padding-top:3%;">
                <div class="col-md-12">
                    <h3>Seja bem vindo a SANTA FAXINA</h3>
                    <h5>Já recebemos seu cadastro e em breve faremos contato.</h5>
                    <h3 style="margin-top:30px;">Por favor selecione a modalidade de faxina desejada:</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1" style="margin-top:20px">
                    <input class="formulario" type="radio" name="modalidade" value="150" checked> Limpeza Convencional de 8 horas.<br>
                    <input class="formulario" type="radio" name="modalidade" value="250"> Limpeza Pós Obra de 8 horas.<br>
                        <div class="row">
                            <div class="col-md-5" style="margin-top:20px;">
                                <label style="font-size:1rem !important;" for="quantidade">Quantidade de profissionais: </label>
                                <input type="text" value="1" class="form-control col-md-2" style="float:right;margin-right:10%;border:1px solid black !important;" name="quantidade" id="quantidade">
                            </div>
                        </div>
                    <h3 style="text-align:center;font-weight:200;margin-top:25px;">Valor: R$ <span id="final">150</span>,00</h3>
                    <input type="hidden" id="valor" name="valor">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align:center;margin-top:25px;">
                    <button type="submit" class="btn btn-primary" id="botao-passo4">Eu Quero!</button>
                </div>
            </div>
        </div>
    </div>
</form>