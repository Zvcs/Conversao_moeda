<?php

namespace Cambio\Conversor\Controller\CarteiraController;

use Cambio\Conversor\Model\Carteira\Carteira;
use Cambio\Conversor\Controller\Conversao\{dolar, libra, euro, peso, real};

class CarteiraController
{
    public function __construct(private Carteira $carteira, private string $conversao)
    {
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