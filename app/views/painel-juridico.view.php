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
            <a href="painel"><button class="btn btn-primary">Residenciais</button></a>
            <button class="btn btn-primary" disabled>Jurídicos</button>
        </div>

        <div id="juridico" class="col-md-10 offset-md-1 main-table">
            <h1 class="title">Clientes Jurídicos</h1>
            <table class="display nowrap dataTable dtr-inline collapsed" id="clientesJuridicos">
                <thead>
                    <tr>
                        <th><b>Ver Mais:</b></th>
                        <th><b>Id:</b></th>
                        <th><b>Nome:</b></th>
                        <th><b>Razão Social:</b></th>
                        <th><b>Nome Fantasia:</b></th>
                        <th><b>Cargo:</b></th>
                        <th><b>Natureza do Negócio:</b></th>
                        <th><b>RG:</b></th>
                        <th><b>CPF:</b></th>
                        <th><b>Data de Nascimento:</b></th>
                        <th><b>CNPJ:</b></th>
                        <th><b>Email:</b></th>
                        <th><b>Quem Receberá a Diarista:</b></th>
                        <th><b>Endereço:</b></th>
                        <th><b>Bairro:</b></th>
                        <th><b>CEP:</b></th>
                        <th><b>Cidade:</b></th>
                        <th><b>Referência:</b></th>
                        <th><b>Nº Peças:</b></th>
                        <th><b>M²:</b></th>
                        <th><b>Dia Semana:</b></th>
                        <th><b>Horário da Diarista:</b></th>
                        <th><b>Observações:</b></th>
                        <th><b>Telefone:</b></th>
                        <th><b>É Pós Obra:</b></th>
                        <th><b>Como Ficou Sabendo da Santa Faxina:</b></th>
                        <th><b>Característica da Diarista:</b></th>
                        <th><b>Data do Cadastro:</b></th>
                        <th><b>Hora do Cadastro:</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientesJuridicos as $clienteJuridico): ?>
                    <tr>
                        <td class="ver-mais"><i class="fa fa-plus"></i></td>
                        <td><?=$clienteJuridico->id;?></td>
                        <td><?=$clienteJuridico->nome;?></td>
                        <td><?=$clienteJuridico->razao_social;?></td>
                        <td><?=$clienteJuridico->nome_fantasia;?></td>
                        <td><?=$clienteJuridico->cargo;?></td>
                        <td><?=$clienteJuridico->natureza;?></td>
                        <td><?=$clienteJuridico->rg;?></td>
                        <td><?=$clienteJuridico->cpf;?></td>
                        <td><?=$clienteJuridico->nascimento;?></td>
                        <td><?=$clienteJuridico->cnpj;?></td>
                        <td><?=$clienteJuridico->email;?></td>
                        <td><?=$clienteJuridico->quem_recebe;?></td>
                        <td><?=$clienteJuridico->endereco;?></td>
                        <td><?=$clienteJuridico->bairro;?></td>
                        <td><?=$clienteJuridico->cep;?></td>
                        <td><?=$clienteJuridico->cidade;?></td>
                        <td><?=$clienteJuridico->referencia;?></td>
                        <td><?=$clienteJuridico->pecas;?></td>
                        <td><?=$clienteJuridico->area;?></td>
                        <td><?=$clienteJuridico->dia_semana;?></td>
                        <td><?=$clienteJuridico->horario;?></td>
                        <td><?=$clienteJuridico->observacao;?></td>
                        <td><?=$clienteJuridico->telefone;?></td>
                        <td><?=$clienteJuridico->pos_obra == 1 ? "Sim" : "Não";?></td>
                        <td><?=$clienteJuridico->como_soube;?></td>
                        <td><?=$clienteJuridico->caracteristica;?></td>
                        <td><?=$clienteJuridico->data_cadastro;?></td>
                        <td><?=$clienteJuridico->hora_cadastro;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php include 'app/views/partials/footer.php'; ?>