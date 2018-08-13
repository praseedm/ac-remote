<?php
use \Calculator\Addition;
use \Calculator\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function can_set_single_operation() {
        $addition = new Addition;
        $addition->setOperands([5,3]);

        $calculator = new Calculator();
        $calculator->setOperations($addition);

        $this->assertCount(1,$calculator->getOperations());
    }
}