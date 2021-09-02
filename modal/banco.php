<?php
session_start();
require_once '../classes/Conexao.class.php';

if($_POST['id'] != NULL){
    $id = intval($_REQUEST['id']);
    $pdo = new CRUD;
    $usuario = $pdo->select('*', 'tb_nomes', ' where id=?', array($id));

    foreach ($usuario as $dds) { 
        $codigo = $dds['ID'];
        $nome = $dds['NOME']; 
        $valSexo = $dds['SEXO'];
        $txtSexo = $dds['SEXO'];       
        $email = $dds['email'];                
    }
    $salvarDisplay = "display:none;";    
    $atualizarDisplay = "";
    $classCor = "btn-default";
    $titulo = "Editar usuário";

    $valSexoM = $dds['SEXO'] == "M"?"M":"F";
    $valSexoF = $dds['SEXO'] == "M"?"F":"M";

    $txtSexoM = $dds['SEXO'] == "M"?"Masculino":"Feminino"; 
    $txtSexoF = $dds['SEXO'] == "M"?"Feminino":"Masculino"; 

    $selecione = "";

}else{
    $nome = "";
    $codigo = "";
    $email = "";
    $valSexoM = "M";
    $valSexoF = "F";
    $txtSexoM = "Masculino"; 
    $txtSexoF = "Feminino"; 
    $salvarDisplay = "";
    $atualizarDisplay = "display:none;";   
    $classCor = "btn-success"; 
    $titulo = "<center>Cadastrar Banco</center>";
    $selecione = '<option value="0">Selecione o Sexo</option>';
}
?>


<div class="modal-content animated bounceInRight">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <i class="fa fa-bank modal-icon"></i>
        <h4 class="modal-title"><?=$titulo;?></h4>
        <small class="font-bold">Preencha todos os campos. Obs.: campos com (*) s�o de preenchimento obrigat�rios.</small>
    </div>
    <form class="form-horizontal" method="post" action="javascript:void(0)">
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group" style="<?=$atualizarDisplay?>">
                    <div class="col-sm-8 col-sm-offset-2">
                        <label class="control-label" for="txtid">ID</label>
                        <input type="text" class="form-control" id="txtid" name="txtid" value="<?=$codigo?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <label class="control-label" for="txtname">Nome</label>
                        <input type="text" class="form-control" id="txtname" data-id="txtname" name="txtname" value="<?=$nome?>">
                    </div>
                </div>                
                
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <label class="control-label" for="txtemail">Email</label>
                        <input type="text" class="form-control" id="txtemail" name="txtemail" value="<?=$email?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <label class="control-label" for="status">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control">
                            <?=$selecione;?>
                            <option value="<?=$valSexoM;?>"><?=$txtSexoM;?></option>
                            <option value="<?=$valSexoF;?>"><?=$txtSexoF;?></option>
                        </select>
                    </div>
                </div>                      
            </div>
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <div class="col-md-3"></div>
                <div class="col-md-3">                             
                    <button style="width: 100%;" type="button" class="btn btn-primary" data-dismiss="modal">CANCELAR</button>
                </div>
                <div class="col-md-3">                             
                    <button style="width: 100%;<?=$salvarDisplay?>" id="cadastrarUsuario" class="btn <?=$classCor?>" id="txtage" name="txtage">SALVAR</button>
                    <button style="width: 100%;<?=$atualizarDisplay?>" onclick="updateUsuario()" class="btn <?=$classCor?>" id="txtage" name="txtage">ATUALIZAR</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </form>
</div>
