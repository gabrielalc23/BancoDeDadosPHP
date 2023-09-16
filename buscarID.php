<?php
    //Conectar com o banco
    $conexao = new PDO("mysql:host=localhost;dbname=Wine",
        "root","");
    //Ativar o depurador de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Recebe o ID de quem será pesquisado
    $id = $_GET["id"];    
    //Cria a query de pesquisa
    $comandoSQL = $conexao->query("SELECT * FROM avaliacao WHERE id=".$id);
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
?>