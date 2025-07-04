<?php
ini_set('display_errors', 1);
error_reporting(1);

header('Content-Type: charset=utf-8');
// trabalhando com Sessions:
session_start();

// criando as Constantes com a configuração do banco
define("TITLE", "Painel Uniasselvi EAD");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_SCHEMA", "painel_uniasselvi");
define("DB_PORT", "3306"); // quando for criar o banco, irei modificar a porta (Mysql)
?>