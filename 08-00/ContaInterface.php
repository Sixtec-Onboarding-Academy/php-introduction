<?php

interface ContaInterface
{
    public function setName(string $name): void;
    public function getName(): string;
    public function deposit(float $value): void;
    public function withdraw(float $value): void;
    public function getBalance(): string;
    public function formatBalance($value = 0): string;
}
