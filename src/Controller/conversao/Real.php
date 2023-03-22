<?php

namespace Cambio\Conversor\Controller\conversao;

require '../Conversao_moeda-main/vendor/autoload.php';

use Cambio\Conversor\Helper\Conversao;

class Real
{
    public function __construct()
    {
    }

    public function converte(string $moeda, float $valor): float
    {
        switch ($moeda) {
            case 'Dolar':
                return $valor * Conversao::REAL_PARA_DOLAR;
            case 'Euro':
                return $valor * Conversao::REAL_PARA_EURO;
            case 'Libra':
                return $valor * Conversao::REAL_PARA_LIBRA;
            case 'Peso':
                return $valor * Conversao::REAL_PARA_PESO;
            default:
                return -1;
        }
    }
}