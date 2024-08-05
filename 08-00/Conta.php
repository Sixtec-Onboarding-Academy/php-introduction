<?php

require 'ContaInterface.php';

class Conta implements ContaInterface
{
    public function __construct(
        private string $name,
        private float $balance = 0
    ) {
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): string
    {
        $formatedBalance = $this->formatBalance();

        return $formatedBalance;
    }

    public function deposit(float $value): void
    {
        $balanceBefore = $this->formatBalance($this->balance);

        $this->balance += $value;

        $depositValue = $this->formatBalance($value);
        $balanceAfter = $this->formatBalance();

        $message = "Depósito de $depositValue realizado com sucesso. Saldo anterior: $balanceBefore. Saldo atual: $balanceAfter" . PHP_EOL;

        echo $message;
    }

    public function withdraw(float $value): void
    {
        $balanceBefore = $this->formatBalance($this->balance);

        if($value > $this->balance) {
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }

        $this->balance -= $value;

        $withdrawValue = $this->formatBalance($value);
        $balanceAfter = $this->formatBalance();

        $message = "Saque de $withdrawValue realizado com sucesso. Saldo anterior: $balanceBefore. Saldo atual: $balanceAfter" . PHP_EOL;

        echo $message;
    }

    public function formatBalance($value = 0): string
    {
        if($value > 0) {
            return 'R$ ' . number_format($value, 2, ',', '.');
        }

        return 'R$ ' . number_format($this->balance, 2, ',', '.');
    }
}
