<?php

namespace Cambio\Conversor\Controller\Conversao\libra;

use Cambio\Conversor\Helper\valores\Conversao;

class Libra
{
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