<?php

function GetObjeto(){
    
    $_PUT = array();
    parse_str(file_get_contents('php://input'), $_PUT);        
    $results = print_r($_PUT, true);
    
    $objJson1 = str_replace("Array\n(\n    [","",$results);
    $objJson2 = str_replace("] => \n)","",$objJson1);
    $objJson = str_replace("_"," ",$objJson2);
    $obj = json_decode($objJson);
    
    return $obj;
}
