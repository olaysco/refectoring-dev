<?php

namespace Ola\Refactoring\Behavioral\ChainOfResponsibility;

class CriminalValidityCheck extends BaseValidityCheck
{
    public function check()
    {
        if ($this->request->isCriminal) {
            // send alert to security agencies
            return false;
        }

        return $this->next();
    }
}
