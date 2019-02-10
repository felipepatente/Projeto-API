<?php

 class ConectaTest{
     
     public $conexao;
     
     function GetConexao(){
         $conexao = mysqli_connect("localhost", "root", "", "MeuWebAPI");
         return $conexao;
     }   
 }

?>