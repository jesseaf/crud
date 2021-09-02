<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-md-offset-4">
            <h3 style="width: 100%;text-align:center">PAINEL DE USUÁRIOS</h3>            
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="pull-right">
                <button type="button" id="refresh" title="Atualizar Tabela de Usuários" name="refresh" class="btn btn-primary"><i class="fa fa-refresh">&nbsp;</i></button>
                <button type="button" id="novoUsuario" name="novoUsuario" data-id="novoUsuario" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modalUsuario"><i class="fa fa-plus">&nbsp;</i> Novo Cadastro</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="usuario" class="table table-responsive table-striped table-bordered table-hover dataTables-example">
                <thead>
                    <tr>
                        <th>ID</th>

                        <th>NOME</th>
                        <th>SEXO</th>
                        <th>EMAIL</th>
                        <th>DATA CADASTRO</th>
                        <th>DATA ALTERAÇÃO</th>
                        <th>SITUAÇÃO</th>
                        <th style="max-width:45px !important;"></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>SEXO</th>
                        <th>EMAIL</th>
                        <th>DATA CADASTRO</th>
                        <th>DATA ALTERAÇÃO</th>
                        <th>SITUAÇÃO</th>
                        <th style="max-width:45px !important;"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div id="dadosTable" class="teste dados">     
        
            <div class="inmodal">                                   
                <div class="modal-header">
                    <i class="fa fa-user modal-icon"></i>
                    <h4 class="modal-title">EDITAR USUÁRIO</h4>
                    <small class="font-bold">Preencha todos os campos. Obs.: campos com (*) s�o de preenchimento obrigat�rios.</small>
                </div>                                   
            </div>

            <form class="form-horizontal" method="post" action="javascript:void(0)">
                <div class="form-group">  
                    <div class="col-sm-12 col-md-2">
                        <label class="control-label" for="txtid">ID</label>
                        <input type="text" class="form-control" id="idTable" name="idTable" readonly>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <label class="control-label" for="txtname">Nome</label>
                        <input type="text" class="form-control" id="nameTable" name="nameTable">
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <label class="control-label" for="txtemail">Email</label>
                        <input type="text" class="form-control" id="emailTable" name="emailTable">
                    </div>
                </div>

                <div class="form-group">   
                    <div class="col-sm-12 col-md-3">
                        <label class="control-label" for="txtsexo">Sexo</label>
                        <input type="text" class="form-control" id="sexoTable" name="sexoTable">
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <label class="control-label" for="txtsexo">Situação</label>
                        <input type="text" class="form-control" id="situacaoTable" name="situacaoTable">
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <label class="control-label" for="txtsexo">Data de Cadastro</label>
                        <input type="text" class="form-control" id="dtCadastroTable" name="dtCadastroTable">
                    </div>
                 
                    <div class="col-sm-12 col-md-3">
                        <label class="control-label" for="txtsexo">Data de alteração</label>
                        <input type="text" class="form-control" id="dtAlteracaoTable" name="dtAlteracaoTable">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-12 col-md-3">                             
                        <button style="width: 100%;" type="button" class="btn btn-primary" data-dismiss="modal">CANCELAR</button>
                    </div>
                    <div class="col-sm-12 col-md-3">                             
                        <button style="width: 100%;<?=$atualizarDisplay?>" onclick="updateUsuario()" class="btn <?=$classCor?>" id="txtage" name="txtage">ATUALIZAR</button>
                    </div>
                </div>
            
            </form>
        </div>        
    </div>
</div>


<div class="modal inmodal fade" id="modalUsuario" role="dialog">
    <div class="modal-dialog">
        <div id="content-data"></div>
    </div>
</div>


<?php include 'footer.php'; ?>