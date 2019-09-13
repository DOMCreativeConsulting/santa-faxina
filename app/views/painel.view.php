<?php include 'app/views/partials/header.php'; ?>
<?php include 'app/views/partials/navbar.php'; ?>
<style>
    body{
        background-color:#f2f2f2;
    }
    .ver-mais{
        text-align:center !important;
        background-color:green !important;
        color:white !important;
        cursor:pointer !important;
    }
</style>
<div class="main">
    <div class="row main-canvas">

        <div class="col-md-2 offset-md-5">
            <button class="btn btn-primary" disabled>Residenciais</button>
            <a href="painel-juridico"><button class="btn btn-primary">Jurídicos</button></a>
        </div>

        <div id="residencial" class="col-md-10 offset-md-1 main-table">
            <h1 class="title">Clientes Residenciais</h1>
            <table class="display nowrap dataTable dtr-inline collapsed" id="clientes">
                <thead>
                    <tr>
                        <th><b>Ver Mais:</b></th>
                        <th><b>Id:</b></th>
                        <th><b>Nome:</b></th>
                        <th><b>RG:</b></th>
                        <th><b>CPF:</b></th>
                        <th><b>Data de Nascimento:</b></th>
                        <th><b>Profissão:</b></th>
                        <th><b>Email:</b></th>
                        <th><b>Endereço:</b></th>
                        <th><b>Bairro:</b></th>
                        <th><b>CEP:</b></th>
                        <th><b>Cidade:</b></th>
                        <th><b>Ponto de Referência:</b></th>
                        <th><b>Tipo de Residência:</b></th>
                        <th><b>Nº de Quartos:</b></th>
                        <th><b>Nº de Suites:</b></th>
                        <th><b>Nº de Banheiros:</b></th>
                        <th><b>Nº de Salas:</b></th>
                        <th><b>Nº de Peças:</b></th>
                        <th><b>M²:</b></th>
                        <th><b>Tempo que não é limpo:</b></th>
                        <th><b>Telefone:</b></th>
                        <th><b>Dia da Semana:</b></th>
                        <th><b>Como Soube:</b></th>
                        <th><b>Horário da Diarista:</b></th>
                        <th><b>Observações:</b></th>
                        <th><b>Característica:</b></th>
                        <th><b>Data do Cadastro:</b></th>
                        <th><b>Hora do Cadastro:</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td class="ver-mais"><i class="fa fa-plus"></i></td>
                        <td><?=$cliente->id;?></td>
                        <td><?=$cliente->nome;?></td>
                        <td><?=$cliente->rg;?></td>
                        <td><?=$cliente->cpf;?></td>
                        <td><?=$cliente->nascimento;?></td>
                        <td><?=$cliente->profissao;?></td>
                        <td><?=$cliente->email;?></td>
                        <td><?=$cliente->endereco;?></td>
                        <td><?=$cliente->bairro;?></td>
                        <td><?=$cliente->cep;?></td>
                        <td><?=$cliente->cidade;?></td>
                        <td><?=$cliente->referencia;?></td>
                        <td><?=$cliente->tipo_residencia;?></td>
                        <td><?=$cliente->quartos;?></td>
                        <td><?=$cliente->suites;?></td>
                        <td><?=$cliente->banheiros;?></td>
                        <td><?=$cliente->salas;?></td>
                        <td><?=$cliente->pecas;?></td>
                        <td><?=$cliente->area;?></td>
                        <td><?=$cliente->tempo_nao_limpo;?></td>
                        <td><?=$cliente->telefone;?></td>
                        <td><?=$cliente->dia_semana;?></td>
                        <td><?=$cliente->como_soube;?></td>
                        <td><?=$cliente->horario;?></td>
                        <td><?=$cliente->observacao;?></td>
                        <td><?=$cliente->caracteristica;?></td>
                        <td><?=$cliente->data_cadastro;?></td>
                        <td><?=$cliente->hora_cadastro;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php include 'app/views/partials/footer.php'; ?>