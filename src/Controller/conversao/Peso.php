<?php

namespace src\cambio\Controller\conversao\peso;

use src\cambio\Helper\Conversao\Conversao;

class Peso
{
    public function converte(string $moeda, float $valor): float
    {
        switch ($moeda) {
            case 'Real':
                return $valor * Conversao::PESO_PARA_REAL;
            case 'Euro':
                return $valor * Conversao::PESO_PARA_EURO;
            case 'Libra':
                return $valor * Conversao::PESO_PARA_LIBRA;
            case 'Dolar':
                return $valor * Conversao::PESO_PARA_DOLAR;
            default:
                return -1;
        }
    }
}