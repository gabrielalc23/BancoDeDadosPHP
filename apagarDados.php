<?php
    //Conectar com o banco
    $conexao = new PDO("mysql:host=localhost;dbname=Wine",
        "root","");
    //Ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Recebe o ID de quem será pesquisado
    $id = $_GET["id"];    
    //Cria a query de pesquisa
    $comandoSQL = $conexao->prepare(
        "DELETE FROM avaliacao WHERE id=".$id);
    $comandoSQL->execute();
?>