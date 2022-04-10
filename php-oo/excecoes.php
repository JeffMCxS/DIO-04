<?php

throw new Exception("Essa e uma exceção!");

echo "\n ... executando ...\n"; //Essa linha não será executada pois o Exception interrompe o código.

//

function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        //return false;
    }
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

$usuarioValido = validarUsuario($usuario);

if (!$usuarioValido) {
    echo "Usuário Inválido!";
    return false;
}

echo "\n ... executando ...\n";
