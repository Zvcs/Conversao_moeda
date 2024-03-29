<?php

namespace Cambio\Conversor\Controller\conversao;

require '../Conversao_moeda-main/vendor/autoload.php';

use Cambio\Conversor\Helper\Conversao;

class Dolar
{
    public function __construct()
    {
    }

    public function converte(string $moeda, float $valor): float
    {
        switch ($moeda) {
            case 'Real':
                return $valor * Conversao::DOLAR_PARA_REAL;
            case 'Euro':
                return $valor * Conversao::DOLAR_PARA_EURO;
            case 'Libra':
                return $valor * Conversao::DOLAR_PARA_LIBRA;
            case 'Peso':
                return $valor * Conversao::DOLAR_PARA_PESO;
            default:
                return -1;
        }
    }
}