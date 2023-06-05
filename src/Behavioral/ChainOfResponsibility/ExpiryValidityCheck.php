<?php

namespace Ola\Refactoring\Behavioral\ChainOfResponsibility;

class ExpiryValidityCheck extends BaseValidityCheck
{
    public function check()
    {
        if ($this->request->expiryDate > date('Y-m-d')) {
            return false;
        }

        return $this->next();
    }
}
