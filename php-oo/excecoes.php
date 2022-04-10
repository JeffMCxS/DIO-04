<?php

throw new Exception("Essa e uma exceção!");

echo "\n ... executando ...\n"; //Essa linha não será executada pois o Exception interrompe o código.

//

function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatório não foram preenchidos!");
    }
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

validarUsuario($usuario);

echo "\n ... executando ...\n";
