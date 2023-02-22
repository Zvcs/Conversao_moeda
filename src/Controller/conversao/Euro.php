<?php

namespace src\cambio\Controller\conversao\euro;

use src\cambio\Helper\Conversao\Conversao;

class Euro
{
    public function converte(string $moeda, float $valor): float
    {
        switch ($moeda) {
            case 'Real':
                return $valor * Conversao::EURO_PARA_REAL;
            case 'Dolar':
                return $valor * Conversao::EURO_PARA_DOLAR;
            case 'Libra':
                return $valor * Conversao::EURO_PARA_LIBRA;
            case 'Peso':
                return $valor * Conversao::EURO_PARA_PESO;
            default:
                return -1;
        }
    }
}