<?php

throw new Exception("Essa e uma exceção!");

echo "\n ... executando ...\n"; // Essa linha não será executada pois o Exception interrompe o código.

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

// Tratando exceções com Try Catch
// Será feita uma tentativa de validar o usuário, se retornar uma excessão,
// ela é capturada (tratada) pelo Catch, caso contrário o código continua sua execução.
try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e -> getMessage(); //O $e recebe a exceção da linha 12
    //die(); // Interrompe o código
} finally { // Finally sempre é executado independente se retornar uma exceção ou não.
    echo "Status da Operação: " . (int)$status; // Cast - transformou o resultado de true/false para 1/0
}

echo "\n ... executando ...\n";
