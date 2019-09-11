<form id="passo2">
    <div class="row" id="passo2">
        <div class="col-md-10 offset-md-1 box">
            <h1 class="title">
                Cadastro de Cliente Residencial
                <small><br>Passo 2</small>
            </h1>
            <div class="multi-step">
                <span class="step"></span>
                <span class="step-active"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
            <div class="row p-2">
                <div class="col-md-4">
                    <label for="tipo_residencia">Tipo de residência:</label>
                    <select name="tipo_residencia" class="form-control">
                        <option value="casa">Casa</option>
                        <option value="apartamento">Apartamento</option>
                        <option value="sobrado">Sobrado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="quartos">Nº de quartos:</label>
                    <input type="number" class="form-control" name="quartos" placeholder="0">
                </div>
                <div class="col-md-2">
                    <label for="suites">Nº de suites:</label>
                    <input type="number" class="form-control" name="suites" placeholder="0">
                </div>
                <div class="col-md-2">
                    <label for="banheiros">Nº de banheiros:</label>
                    <input type="number" class="form-control" name="banheiros" placeholder="0">
                </div>
                <div class="col-md-2">
                    <label for="salas">Nº de salas:</label>
                    <input type="number" class="form-control" name="salas" placeholder="0">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-2">
                    <label for="pecas">Nº de peças:</label>
                    <input type="number" class="form-control" name="pecas" placeholder="0">
                </div>
                <div class="col-md-2">
                    <label for="area">M²:</label>
                    <input type="number" class="form-control" name="area" placeholder="Ex: 75">
                </div>
                <div class="col-md-8">
                    <label for="tempo_nao_limpo">A quanto tempo/dias essa residência não é limpa?</label>
                    <input type="text" class="form-control" name="tempo_nao_limpo">
                </div>
            </div>
            <div class="row p-2"> 
                <div class="col-md-4">
                    <label for="telefone">Telefone para contato:</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" required>
                </div>   
                <div class="col-md-8">
                    <label for="dia_semana">Para qual dia da semana que você deseja a limpeza? Informe outras opções de datas.</label>
                    <input type="text" class="form-control" name="dia_semana" required>
                </div>
            </div>
            <div class="row p-2"> 
                <div class="col-md-4">
                    <label for="como_soube">Como você ficou sabendo da Santa Faxina?</label>
                    <input type="text" class="form-control" name="como_soube" required>
                </div>  
                <div class="col-md-8">
                    <label for="horario">Qual horário que você quer que ela chegue?</label>
                    <input type="text" class="form-control" name="horario" placeholder="Lembramos que a diária é de 8 horas/dia, com 1 hora de almoço" required>
                </div>   
            </div>
            <div class="row p-2">
                <div class="col-md-12">
                    <label for="observacao">Nos diga se tem algum foco especial para a limpeza ou algo que você julgue importante comentar conosco:</label>
                    <input type="text" class="form-control" name="observacao" placeholder="Possui animais de estimação? Quais? A limpeza é pós obra?">
                </div>
            </div>
            <div class="row pb-4 p-2"> 
                <div class="col-md-8">
                    <label for="caracteristica">Alguma característica da diarista que você gostaria de solicitar?</label>
                    <input type="text" class="form-control" name="caracteristica">
                </div>
                <div class="col-md-4">
                    <button type="submit" id="botao-passo2" class="btn btn-primary" style="margin-top:32px;width:100%">Próximo</button>
                </div>
            </div>
        </div>
    </div>
</form>