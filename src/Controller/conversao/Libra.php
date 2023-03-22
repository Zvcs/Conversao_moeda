<?php

namespace Cambio\Conversor\Controller\conversao;

require '../Conversao_moeda-main/vendor/autoload.php';

use Cambio\Conversor\Helper\Conversao;

class Libra
{
    public function __construct()
    {
    }

    public function converte(string $moeda, float $valor): float
    {
        switch ($moeda) {
            case 'Real':
                return $valor * Conversao::LIBRA_PARA_REAL;
            case 'Euro':
                return $valor * Conversao::LIBRA_PARA_EURO;
            case 'Dolar':
                return $valor * Conversao::LIBRA_PARA_DOLAR;
            case 'Peso':
                return $valor * Conversao::LIBRA_PARA_PESO;
            default:
                return -1;
        }
    }
}