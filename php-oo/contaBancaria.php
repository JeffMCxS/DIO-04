<?php

namespace name;

class ContaBancaria
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo = 1000;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado!';
    }
}


$conta = new ContaBancaria(
    'Banco do Brasil',
    'Aurelio',
    '8244',
    '57354-10',
    300
);

echo $conta->obterSaldo();
echo $conta->depositar(300);
echo "<br>";
echo $conta->obterSaldo();
echo $conta->sacar(100);
echo "<br>";
echo $conta->obterSaldo();
