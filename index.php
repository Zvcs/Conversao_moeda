<?php

require_once 'vendor/autoload.php';

use src\cambio\Controller\cambio\CarteiraController;
use src\cambio\Helper\Moedas\Moedas;
use src\cambio\Model\Carteira\Carteira;

$carteira = new Carteira('Teste', 1000, Moedas::REAL);

$cambio = new CarteiraController($carteira, Moedas::DOLAR);

$valor = $carteira->getDinheiro();

$cambio->getValorConvertido($valor);