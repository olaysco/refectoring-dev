<?php

namespace Ola\Refactoring\Behavioral\ChainOfResponsibility;

class Request
{

    public function __construct(private $age, private $name, private $expiryDate, private $isCriminal)
    {
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        return null;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
