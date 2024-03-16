<?php

//c:\xampp\php\php.exe -S localhost:8000

$host = '127.0.0.1';
$db = 'cadastro';
$userdb = 'root'
$passworddb = '';

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$bairro = $_POST['bairro'];
$pais = $_POST['pais'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$news = $_POST['news'];

$conexao = mysql_connect($host, $db, $userdb, $passworddb);

if(!$conexao) {
    die('Erro de conexão->'.mysql_error())
} else {
    $banco = mysql_select_db($db, $conexao);
}

if(!$banco) {
    die('Erro de conexão ao banco->'.mysql_error())
}