<?php

namespace src\cambio\Controller\cambio;

use src\cambio\Model\Carteira\Carteira;
use src\cambio\Controller\conversao\{dolar, libra, euro, peso, real};

class CarteiraController
{
    public function __construct(private Carteira $carteira, private string $conversao)
    {
        $this->carteira = $carteira;
        $this->conversao = $conversao;
    }
    
    public function getValorConvertido($valor): string
    {
        $valorConvertido = $this->converterValor($valor, $this->conversao);


        return "O valor convertido para {$this->conversao} e de {$valorConvertido}";
    }

    private function converterValor($moeda, $valor)
    {
        return $moeda->converte($this->conversao, $valor);
    }
    
}