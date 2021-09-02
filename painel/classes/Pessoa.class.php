<?php

header("Content-Type: text/html; charset=UTF-8",true);
require_once 'Conexao.class.php';
class Pessoa{
    
    private $id;
    private $nome;
    private $email;
    private $sexo;
        
    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }

    function getEmail() {
        return $this->email;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function getSexo() {
        return $this->sexo;
    }
    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    public function Cadastrar(){   
        $pdo = new CRUD;
        $addPessoa = $pdo->insert('tb_nomes', 'nome=?,sexo=?,email=?,situacao=?', array($this->getNome(),$this->getSexo(),$this->getEmail(),0));
        if($addPessoa){
            $resultado = array(
                0 => "CADASTRO REALIZADO COM SUCESSO",
                1 => true,
            ); 
            return (json_encode($resultado));       
        }else{
            $resultado = array(
                0 => "ERRO AO CADASTRAR PERMISSAO",
                1 => false,
            ); 
            return (json_encode($resultado));       
        }                        
    }
    
    public function removePermissao(){   
        $pdo = new CRUD;
        $rmPermissao = $pdo->delete('acesso', 'where codigo_acesso=?', array($this->getCodigo_permissao()));
        if($rmPermissao){
            $zero = "Permissao removida!"; $um = true;
        }else{            
            $zero = "Erro ao remover Permissao!"; $um = false;                 
        }
        
        $resultado = array(
            0 => $zero,
            1 => $um,
        ); 
        return (json_encode($resultado));  
    }                
    
    public function atualizaRNC(){
        $pdo = new CRUD;
        $enviaRNC = $pdo->update('rnc', 'codigo_destino=?,nome_destino=?,descricao=?,tipo=? where chave=?',array($this->getSetor_destino(),$this->getNome_setor_destino(),$this->getDescricao(),$this->getTipo(),$this->getChave()));                 
        if($enviaRNC){                
            $resultado = array(
                0 => "RNC enviada com sucesso!",
                1 => true
            ); 
            return (json_encode($resultado));
        }else{
            $resultado = array(
                0 => "RNC N�o enviada!",
                1 => false
            ); 
            return (json_encode($resultado));
        }
    }
    
    
}