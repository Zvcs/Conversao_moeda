<?php

namespace Cambio\Conversor\Controller;

require '../Conversao_moeda-main/vendor/autoload.php';

use Cambio\Conversor\Model\Carteira;
use Cambio\Conversor\Controller\conversao\{
    Dolar,
    Euro,
    Libra,
    Peso,
    Real
};

class CarteiraController
{
    public function __construct(private Carteira $carteira, private string $conversao)
    {
    }

    public function getConversao():string
    {
        return $this->conversao;
    }

    public function getValorConvertido($valor): void
    {

        $valorConvertido = $this->converterValor($this->conversao, $valor);

        echo "O valor convertido para {$this->conversao} e de {$valorConvertido}";
    }

    private function converterValor($moeda, $valor): float
    {
        $converte = new $moeda();
        return $converte->converte($this->conversao, $valor);
    }

}