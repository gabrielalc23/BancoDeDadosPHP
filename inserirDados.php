<?php
    //Conectar com o banco
    $conexao = new PDO("mysql:host=localhost;dbname=Wine",
        "root","");
    //Ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Recebe os dados pelo método GET
    $nome   = $_GET["nome"];
    $origem = $_GET["origem"]; 
    $tipo   = $_GET["tipo"];
    $nota   = $_GET["nota"];
    //Cria a query de inserção
    $comandoSQL = $conexao->prepare("INSERT INTO avaliacao (nome, origem, tipo, nota)".
                       " VALUES('".$nome."','".$origem."','"
                                  .$tipo."',".$nota.")");
    //executa a query
    $comandoSQL->execute();                            
?>