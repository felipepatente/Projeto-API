<?php

include '../BancoEndereco.php';

class AvaliadorTest extends PHPUnit_Framework_TestCase{
    
    public function testRemoverEndereco(){
        
        require_once 'ConectaTest.php';
        $conexao = new ConectaTest();                
        
        require_once 'BancoEnderecoTest.php';
        $id = new BancoEnderecoTest();                
        
        removeProduto($conexao->GetConexao(), $id->GetID());        
    }
}
