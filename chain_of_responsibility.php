<?php

require 'vendor/autoload.php';

use Ola\Refactoring\Behavioral\ChainOfResponsibility\AgeValidityCheck;
use Ola\Refactoring\Behavioral\ChainOfResponsibility\CriminalValidityCheck;
use Ola\Refactoring\Behavioral\ChainOfResponsibility\ExpiryValidityCheck;
use Ola\Refactoring\Behavioral\ChainOfResponsibility\Request;

$request = new Request(25, 'samador', date('Y-m-d', strtotime('+1 year')), false);

(new AgeValidityCheck($request))
    ->setNext(CriminalValidityCheck::class)
    ->setNext(ExpiryValidityCheck::class)
    ->check();
