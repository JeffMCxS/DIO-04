<?php

//Fazer todas as checagens de tipos
declare(strict_types=1);

class Produto
{
    /**
     * @var PDO
     */

    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=database-pdo', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list(): array
    {
        $sql = 'select * from produtos';

        $produtos = [];

        //echo '<h3>Produtos: </h3>'; //Refatora, n se retorna dados por echo

        foreach ($this->conexao->query($sql) as $key => $value) {
            //echo 'Id: ' . $value['id'] . '<br> Descriçao: ' . $value['descricao'] . '<hr>'; //Refatora
            array_push($produtos, $value);
        }

        return $produtos;
    }

    public function insert(string $descricao): int
    {
        $sql = 'insert into produtos(descricao) values(?)';

        $prepare = $this->conexao->prepare($sql);

        //$prepare->bindParam(1, $_GET['descricao']); //Refatora
        $prepare->bindParam(1, $descricao);

        $prepare->execute();

        //echo $prepare->rowCount(); //Refatorado, nao se exibe dados por echo diretamente
        return $prepare->rowCount();
    }

    public function update(string $descricao, int $id): int
    {
        $sql = 'update produtos set descricao = ? where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id): int
    {
        $sql = 'delete from produtos where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}
