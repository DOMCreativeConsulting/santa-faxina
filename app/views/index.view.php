<?php include 'app/views/partials/header.php'; ?>
<style>
body{
    background-image:url('public/assets/img/background.jpg');
}
</style>
<div class="container">
    <form>
        <div class="row" id="passo1">
            <div class="col-md-10 offset-md-1 box">
                <h1 class="title">
                    Cadastro de Cliente Residencial
                </h1>
                <div class="row p-2">
                    <div class="col-md-4">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="col-md-4">
                        <label for="rg">RG:</label>
                        <input type="text" class="form-control" name="rg" placeholder="0000000000" required>
                    </div>
                    <div class="col-md-4">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf" placeholder="00000000000" required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4">
                        <label for="nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control" name="nascimento">
                    </div>
                    <div class="col-md-4">
                        <label for="profissao">Profissão:</label>
                        <input type="text" class="form-control" name="profissao" placeholder="Ex: Professor">
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="exemplo@email.com" required>
                    </div>
                </div>
                <div class="row p-2">    
                    <div class="col-md-4">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Rua, nº" required>
                    </div>
                    <div class="col-md-4">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" placeholder="Bairro Exemplo" required>
                    </div>
                    <div class="col-md-4">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" name="cep" placeholder="00000000" required>
                    </div>
                </div>
                <div class="row pb-4 p-2"> 
                    <div class="col-md-4">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
                    </div>
                    <div class="col-md-4">
                        <label for="referencia">Ponto de Referência:</label>
                        <input type="text" class="form-control" name="referencia" placeholder="Ex: Ao lado do supermercado">
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="botao-passo1" class="btn btn-primary" style="margin-top:32px;width:100%">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="passo2">
            <div class="col-md-10 offset-md-1 box">
                <h1 class="title">
                    Cadastro de Cliente Residencial
                </h1>
                <div class="row p-2">
                    <div class="col-md-4">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="col-md-4">
                        <label for="rg">RG:</label>
                        <input type="text" class="form-control" name="rg" placeholder="0000000000" required>
                    </div>
                    <div class="col-md-4">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf" placeholder="00000000000" required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4">
                        <label for="nascimento">Data de nascimento:</label>
                        <input type="date" class="form-control" name="nascimento">
                    </div>
                    <div class="col-md-4">
                        <label for="profissao">Profissão:</label>
                        <input type="text" class="form-control" name="profissao" placeholder="Ex: Professor">
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="exemplo@email.com" required>
                    </div>
                </div>
                <div class="row p-2">    
                    <div class="col-md-4">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Rua, nº" required>
                    </div>
                    <div class="col-md-4">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" placeholder="Bairro Exemplo" required>
                    </div>
                    <div class="col-md-4">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" name="cep" placeholder="00000000" required>
                    </div>
                </div>
                <div class="row pb-4 p-2"> 
                    <div class="col-md-4">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
                    </div>
                    <div class="col-md-4">
                        <label for="referencia">Ponto de Referência:</label>
                        <input type="text" class="form-control" name="referencia" placeholder="Ex: Ao lado do supermercado">
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="botao-passo1" class="btn btn-primary" style="margin-top:32px;width:100%">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>  
<?php include 'app/views/partials/footer.php'; ?>
<script src="public/assets/js/cadastro.js"></script>
