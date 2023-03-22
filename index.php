<?php

require 'vendor/autoload.php';

use Cambio\Conversor\Controller\CarteiraController;
use Cambio\Conversor\Helper\Moedas;
use Cambio\Conversor\Model\Carteira;

$carteira = new Carteira('Teste', 1000, Moedas::REAL);

$cambio = new CarteiraController($carteira, Moedas::DOLAR);

$valor = $carteira->getDinheiro();

$cambio->getValorConvertido($valor);