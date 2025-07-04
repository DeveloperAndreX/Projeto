<?php

$db = new mysqli("localhost", "root", "", "painel_uniasselvi", "3306");
// validação:
if($db ->connect_errno){
    echo "Erro banco de Dados " . $db->connect_error;
    exit();
}

echo "sem erros";

?>