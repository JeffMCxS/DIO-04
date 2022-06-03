<?php

require 'Produto.php';

$produto = new Produto();


switch ($_GET['operacao']) {
    case 'list':
        //var_dump($produto->list()); //Apenas teste
        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descriçao: ' . $value['descricao'] . '<hr>';
        }
        break;
        //localhost/?operacao=list

    case 'insert':
        //Assim é retornado 1 para 'operacao realizada' e 0 para 'nao realizada'
        //echo $produto->insert('Novo Produto Teste 03');

        $status = $produto->insert('Novo Produto Teste 04');

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }
        echo "Registro inserido com sucesso!";

        break;
        //localhost/?operacao=insert

    case 'update':
        $status = $produto->update('Produto Alterado', 4);

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }
        echo "Registro atualizado com sucesso!";

        break;
        //localhost/?operacao=update&id=4

    case 'delete':
        $status = $produto->delete(3);

        if (!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }
        echo "Registro removido com sucesso!";

        break;
        //localhost/?operacao=delete
}
