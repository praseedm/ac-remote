<?php

namespace Calculator;


abstract class OperationsAbstract
{
    protected $operands= [];

    public function setOperands(array $operands) {
        $this->operands = $operands;
    }
}