<?php

include "./Conecta.php";
include './BancoEndereco.php';
include './Utilidade.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
   
    $enderecos = listarEndereco($conexao);   
    echo json_encode($enderecos);
    
}else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $obj = GetObjeto();
    
    $pais = $obj->PAIS;
    $estado = $obj->ESTADO;
    $cidade = $obj->CIDADE;
    $logradouro = $obj->LOGRADOURO;
    
    adicionarEndereco($conexao, $pais, $estado, $cidade, $logradouro); 
    
}else if($_SERVER['REQUEST_METHOD'] === 'PUT'){
    
    $obj = GetObjeto();
    
    $id = $obj->ID;
    $pais = $obj->PAIS;
    $estado = $obj->ESTADO;
    $cidade = $obj->CIDADE;
    $logradouro = $obj->LOGRADOURO;
    
    alteraProduto($conexao, $id, $pais, $estado, $cidade, $logradouro);
    
}else if($_SERVER['REQUEST_METHOD'] === 'DELETE'){    
    
    $obj = GetObjeto();    
    $id = $obj->ID;
    removeProduto($conexao, $id);        
}