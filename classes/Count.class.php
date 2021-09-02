<?php
header("Content-Type: text/html; charset=UTF-8",true);
require_once 'Conexao.class.php';

class Count{   
    
    public function countDados(){
        $pdo = new CRUD;    
        //$qtd_aberto=$pdo->select('count(distinct tb_nomes.id) as pessoas, count(distinct tb_profissoes.id) as profissoes, count(distinct tb_bancos.id) as bancos','tb_profissoes,tb_bancos,tb_nomes','',array())->fetchAll(PDO::FETCH_OBJ);             
        $qtd_aberto=$pdo->select('(select count(*) from tb_nomes) as pessoas, (select count(*) from tb_bancos) as bancos, (select count(*) from tb_profissoes) as profissoes','dual','',array())->fetchAll(PDO::FETCH_OBJ);             
        return $qtd_aberto;
    }

}

$p = new Count();

$resultado = array(
    0 => $p->countDados()
);
print json_encode($resultado);