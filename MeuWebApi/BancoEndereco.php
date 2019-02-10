<?php
    
function listarEndereco($conexao) {

    $enderecos = array();
    $resultado = mysqli_query($conexao, "SELECT * FROM ENDERECO");

    while($endereco = mysqli_fetch_assoc($resultado)) {
        array_push($enderecos, $endereco);
    }
    return $enderecos;
}

function adicionarEndereco($conexao, $pais, $estado, $cidade, $logradouro) {

    $query = "insert into endereco 
            values (DEFAULT,'{$pais}', '{$estado}', '{$cidade}', '{$logradouro}')";

    $resultadoDaInsercao = mysqli_query($conexao, $query);

    return $resultadoDaInsercao;
}

function alteraProduto($conexao, $id, $pais, $estado, $cidade, $logradouro)
{
    $query = "update endereco set pais = '{$pais}', estado = '{$estado}', cidade = '{$cidade}', logradouro = '{$logradouro}' where id = {$id}";

    return mysqli_query($conexao, $query);		
}

function removeProduto($conexao, $id) {

    $query = "delete from endereco where id = {$id}";
    return mysqli_query($conexao, $query);    	

}            