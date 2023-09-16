<?php
    //Conectar com o banco
    $conexao = new PDO("mysql:host=localhost;dbname=Wine",
        "root","");
    //Ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Recebe os dados pelo método GET
    $id     = $_GET["id"];
    $nome   = $_GET["nome"];
    $origem = $_GET["origem"]; 
    $tipo   = $_GET["tipo"];
    $nota   = $_GET["nota"];
    //Cria a query de inserção
    $comandoSQL = $conexao->prepare(
        "UPDATE avaliacao SET NOME ='".$nome."'".
        ", ORIGEM = '".$origem."'".
        ", TIPO = '".$tipo."'".
        ", NOTA = ".$nota." WHERE id = ".$id);
    //executa a query
    $comandoSQL->execute();                            
?>