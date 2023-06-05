<?php

namespace Ola\Refactoring\Behavioral\ChainOfResponsibility;

abstract class BaseValidityCheck implements ValidityCheckInterface
{

    protected ValidityCheckInterface $next;
    protected ValidityCheckInterface $first;
    protected ValidityCheckInterface $current;

    public function __construct(protected Request $request)
    {
        $this->current = $this;
    }

    public function setNext($checker)
    {
        $next = new $checker($this->request);
        $this->current->next = $next;
        $this->current = $next;

        return $this;
    }

    public function next()
    {
        if (empty($this->next)) {
            return true;
        }

        return $this->next->check();
    }
}
