<?php
require_once '../classes/Conexao.class.php';

$p = new Pessoa;

$p->setNome($_POST['nome']);
$p->setEmail($_POST['email']);
$p->setSexo($_POST['sexo']);

print $p->Cadastrar();
 
