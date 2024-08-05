<?php

require 'Conta.php';

final class ContaCorrente extends Conta
{
    private float $limit = 1000;

    public function __construct(
        private string $name,
        private float $balance = 0
    ) {
        parent::__construct($name, $balance);
    }

    public function getLimit(): string
    {
        $formatedLimit = $this->formatBalance($this->limit);

        return $formatedLimit;
    }

    public function withdraw(float $value): void
    {
        $limitBefore = $this->formatBalance($this->limit);
        $balanceBefore = $this->formatBalance($this->balance);

        if($value > $this->balance + $this->limit) {
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }

        $diffBalance = $this->balance - $value;

        $this->balance -= $value;
        $this->limit += $diffBalance;

        $withdrawValue = $this->formatBalance($value);
        $balanceAfter = $this->formatBalance();

        $message = "
            Saque de $withdrawValue realizado com sucesso.
            Limite anterior: $limitBefore.
            Saldo anterior: $balanceBefore.
            Limite Atual: $this->limit.
            Saldo atual: $balanceAfter" . PHP_EOL;

        echo $message;
    }
}

$contaCorrente = new ContaCorrente('Minha Conta Corrrente');
$contaCorrente->withdraw(500);
