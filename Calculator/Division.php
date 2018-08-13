<?php
namespace Calculator;
use Calculator\Exceptions\noOperandsException;

class Division extends OperationsAbstract implements OperationsInterface
{
    public function calculate()
    {
        if( count($this->operands) === 0 ) {
            throw new noOperandsException;
        }
        $result = 0;
        foreach($this->operands as $index => $operand) {
            if($index === 0) {
                $result = $operand;
                continue;
            } else {
                $result /= $operand;
            }
        }
        return $result;

//        array_reduce($this->operands, function($a, $b) {
//            if($a !== null && $b !== null) {
//                return $a/$b;
//            }
//            return $b;
//        }, null);
    }
}