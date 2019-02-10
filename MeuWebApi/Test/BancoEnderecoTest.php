<?php

class BancoEnderecoTest{
    
    function GetID(){
        
        require_once 'ConectaTest.php';
        $conexao = new ConectaTest();   
        
        $resultado = mysqli_query($conexao->GetConexao(), "SELECT ID FROM ENDERECO LIMIT 1");
        
        $endereco = mysqli_fetch_array($resultado);
        return $endereco[0];
        
    }    
}

?>