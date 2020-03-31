<form id="passo1">
    <div class="row" id="passo1">
        <div class="col-md-10 offset-md-1 box">
            <h1 class="title">
                Cadastro de Cliente Residencial
                <small><br>Passo 1</small>
            </h1>
            <div class="multi-step">
                <span class="step-active"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
            <div class="row p-2">
                <div class="col-md-4">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" required>
                </div>
                <div class="col-md-4">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" name="rg" required>
                </div>
                <div class="col-md-4">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-4">
                    <label for="nascimento">Data de nascimento:</label>
                    <input type="date" class="form-control" name="nascimento">
                </div>
                <div class="col-md-4">
                    <label for="profissao">Profissão:</label>
                    <input type="text" class="form-control" name="profissao" >
                </div>
                <div class="col-md-4">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row p-2">    
                <div class="col-md-4">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" name="endereco" required>
                </div>
                <div class="col-md-4">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" required>
                </div>
                <div class="col-md-4">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" name="cep" id="cep" required>
                </div>
            </div>
            <div class="row pb-4 p-2"> 
                <div class="col-md-4">
                    <label for="numero">Numero:</label>
                    <input type="text" class="form-control" name="numero" required>
                </div>
                <div class="col-md-4">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" name="cidade" required>
                </div>
                <div class="col-md-4">
                    <label for="referencia">Ponto de Referência:</label>
                    <input type="text" class="form-control" name="referencia">
                </div>
            </div>
            <div class="row pb-4 p-2">
                <div class="col-md-4">
                    <button type="submit" id="botao-passo1" class="btn btn-primary" style="margin-top:32px;width:100%">Próximo</button>
                </div>
            </div>
        </div>
    </div>
</form>