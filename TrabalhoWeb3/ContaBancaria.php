<?php

class ContaCorrente {
    private $titular;
    private $agencia;
    private $numero;
    private $saldo;

    public function __construct($titular, $agencia, $numero) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = 0;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de $valor realizado com sucesso. Saldo atual: {$this->saldo} <br>";
        } else {
            echo "Saldo insuficiente para realizar o saque. <br>";
        }
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Depósito de $valor realizado com sucesso. Saldo atual: {$this->saldo} <br>";
    }

    public function transferir($valor, $contaDestino) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            $contaDestino->saldo += $valor;
            echo "Transferência de $valor realizada com sucesso. Saldo atual: {$this->saldo} <br>";
        } else {
            echo "Saldo insuficiente para realizar a transferência. <br>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// Testando a classe ContaCorrente

// Criando duas contas correntes
$conta1 = new ContaCorrente("João", "001", "123456");
$conta2 = new ContaCorrente("Maria", "002", "654321");

// Verificando saldos iniciais
echo "Saldo inicial conta 1: {$conta1->getSaldo()} <br>";
echo "Saldo inicial conta 2: {$conta2->getSaldo()} <br>";

// Realizando operações
$conta1->depositar(1000);
$conta1->sacar(500);
$conta1->transferir(300, $conta2);

// Verificando saldos após as operações
echo "Saldo atual conta 1: {$conta1->getSaldo()} <br>";
echo "Saldo atual conta 2: {$conta2->getSaldo()} <br>";
