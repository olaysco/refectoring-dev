<?php

namespace Ola\Refactoring\Behavioral\ChainOfResponsibility;

interface ValidityCheckInterface
{
    public function next();

    public function check();
}
