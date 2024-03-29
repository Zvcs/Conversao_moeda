<?php

namespace Cambio\Conversor\Model;


class Carteira
{
    public function __construct(private string $nome, private float $dinheiro, private string $moeda)
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDinheiro(): float
    {
        return round($this->dinheiro, 2);
    }

    public function getMoeda(): string
    {
        return $this->moeda;
    }

    public function getDadosCarteira(): string
    {
        $message = "A carteira pertence a {$this->nome}, possuindo o valor de: {$this->dinheiro} em {$this->moeda}";
        return $message;
    }
}