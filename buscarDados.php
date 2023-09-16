<?php
    //Conectar com o banco
    $conexao = new PDO("mysql:host=localhost;dbname=Wine",
        "root","");
    //Ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Cria a query de pesquisa
    $comandoSQL = $conexao->query("SELECT * FROM avaliacao ORDER BY nome");
    //Cria um array
    $stringJSON = array();
    //Executar a query e inserir os dados no array
    while($linhaDB = $comandoSQL->fetch()){
        $stringJSON[] = $linhaDB;
    }
    //Gerar um JSON a partir do array
    $arrayJSON = json_encode(
        $stringJSON,JSON_UNESCAPED_SLASHES ||
                    JSON_UNESCAPED_UNICODE);
    //Exibe o JSON gerado
    print $arrayJSON;
    // echo "<PRE>";
    // echo json_encode(json_decode($arrayJSON),JSON_PRETTY_PRINT);
    // echo "</PRE>";
?>