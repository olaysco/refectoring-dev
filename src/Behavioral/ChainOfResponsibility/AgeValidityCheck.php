<?php

namespace Ola\Refactoring\Behavioral\ChainOfResponsibility;

class AgeValidityCheck extends BaseValidityCheck
{
    public function check()
    {
        if ($this->request->age < 18) {
            return false;
        }

        return $this->next();
    }
}
