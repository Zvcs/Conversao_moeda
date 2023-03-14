<?php

require_once 'vendor/autoload.php';

use Cambio\Conversor\Controller\CarteiraController\CarteiraController;
use Cambio\Conversor\Helper\moedas\Moedas;
use Cambio\Conversor\Model\Carteira\Carteira;

$carteira = new Carteira('Teste', 1000, Moedas::REAL);

$cambio = new CarteiraController($carteira, Moedas::DOLAR);

$valor = $carteira->getDinheiro();

$cambio->getValorConvertido($valor);