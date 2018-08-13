<?php

namespace Calculator;

use Calculator\Exceptions\noOperandsException;

class Addition extends OperationsAbstract implements OperationsInterface
{
    protected $operands= [];

    public function setOperands(array $operands) {
        $this->operands = $operands;
    }

    public function calculate() {
        if( count($this->operands) === 0 ) {
            throw new noOperandsException;
        }
        return array_sum($this->operands);
    }
}