<?php include 'app/views/partials/header.php'; ?>
<?php include 'app/views/partials/navbar.php'; ?>
<style>
    body{
        background-color:#f2f2f2;
    }
</style>
<div class="main">
    <div class="row main-canvas">

        <div class="col-md-2 offset-md-5">
            <label for="filtro">Vizualizar:</label>
            <select style="background-color:#f1f1f1;width:100%;" name="filtro" id="filtro">
                <option value="residencial">Residencial</option>
                <option value="juridico">Jurídico</option>
            </select>
        </div>

        <div id="residencial" class="col-md-10 offset-md-1 main-table">
            <h1 class="title">Clientes Residenciais</h1>
            <table class="display nowrap dataTable dtr-inline collapsed" id="clientes">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Profissão</th>
                        <th>Email</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td><?=$cliente->id;?></td>
                        <td><?=$cliente->nome;?></td>
                        <td><?=$cliente->rg;?></td>
                        <td><?=$cliente->cpf;?></td>
                        <td><?=$cliente->nascimento;?></td>
                        <td><?=$cliente->profissao;?></td>
                        <td><?=$cliente->email;?></td>
                        <td><?=$cliente->endereco;?></td>
                        <td><?=$cliente->bairro;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="juridico" class="col-md-10 offset-md-1 main-table">
            <h1 class="title">Clientes Jurídicos</h1>
            <table class="display nowrap dataTable dtr-inline collapsed" id="clientesJuridicos">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>CNPJ</th>
                        <th>Email</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientesJuridicos as $clienteJuridico): ?>
                    <tr>
                        <td><?=$clienteJuridico->id;?></td>
                        <td><?=$clienteJuridico->nome;?></td>
                        <td><?=$clienteJuridico->rg;?></td>
                        <td><?=$clienteJuridico->cpf;?></td>
                        <td><?=$clienteJuridico->nascimento;?></td>
                        <td><?=$clienteJuridico->cnpj;?></td>
                        <td><?=$clienteJuridico->email;?></td>
                        <td><?=$clienteJuridico->endereco;?></td>
                        <td><?=$clienteJuridico->bairro;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php include 'app/views/partials/footer.php'; ?>