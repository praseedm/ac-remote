<?php

namespace Calculator;


class Calculator implements OperationsInterface
{
    protected $operations = [];
    public function setOperation(OperationsInterface $operation) {
        $this->operations[] = $operation;
    }

    public function setOperations(array $operations) {
//        foreach ($operations as $index => $operation) {
//            if (!$operation instanceof OperationsInterface) {
//                unset($operations[$index]);
//            }
//        }
        $filteredOps = array_filter($operations, function ($operation) {
            return $operation instanceof OperationsInterface ;
        });
        $this->operations = array_merge($this->operations, $filteredOps);
    }
    public function getOperations() {
        return $this->operations;
    }

    public function calculate()
    {
//        $result = null;
//        foreach($this->operations as $operation) {
//            $result[] = $operation->calculate();
//        }

        return array_map(function ($operation) {
                return $operation->calculate();
                }, $this->operations);
       // return $result;
    }
}