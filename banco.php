<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-md-offset-4">
            <h3 style="width: 100%;text-align:center">PAINEL DE BANCOS</h3>            
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="pull-right">
                <button type="button" id="refresh" title="Atualizar Tabela de Bancos" name="refresh" class="btn btn-primary"><i class="fa fa-refresh">&nbsp;</i></button>
                <button type="button" id="novoBanco" name="novoBanco" data-id="novoBanco" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modalBanco"><i class="fa fa-plus">&nbsp;</i> Novo Cadastro</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="bancos" class="table table-responsive table-striped table-bordered table-hover dataTables-example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NÚMERO</th>
                        <th>DESCRIÇÃO</th>
                        <th>SITE</th>
                        <th>DATA CADASTRO</th>
                        <th>DATA ALTERAÇÃO</th>
                        <th style="max-width:45px !important;"></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>NÚMERO</th>
                        <th>DESCRIÇÃO</th>
                        <th>SITE</th>
                        <th>DATA CADASTRO</th>
                        <th>DATA ALTERAÇÃO</th>
                        <th style="max-width:45px !important;"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<div class="modal inmodal fade" id="modalBanco" role="dialog">
    <div class="modal-dialog">
        <div id="content-data"></div>
    </div>
</div>

<?php include 'footer.php'; ?>