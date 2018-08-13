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
        $calculator->setOperation($addition);

        //var_dump($calculator->getOperations());
        $this->assertCount(1,$calculator->getOperations());
    }

    /** @test */
    public function can_set_multiple_operations() {
        $addition_1 = new Addition;
        $addition_1->setOperands([5,3]);

        $addition_2 = new Addition;
        $addition_2->setOperands([2,3]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition_1, $addition_2]);
        $this->assertCount(2,$calculator->getOperations());
    }

    /** @test */
    public function verify_operations_instance() {
        $addition = new Addition;
        $addition->setOperands([5,3]);

        $calculator = new Calculator();
        $calculator->setOperations(['sec','hai',$addition,'string1','string1']);

        $this->assertCount(1,$calculator->getOperations());
    }

    /** @test */
    public function can_calculate_result() {
        $addition = new Addition;
        $addition->setOperands([5,3]);

        $calculator = new Calculator();
        $calculator->setOperation($addition);

        $this->assertEquals(8,$calculator->calculate()[0]);
    }

    /** @test */
    public function can_calculate_multiple_results () {
        $addition_1 = new Addition;
        $addition_1->setOperands([5,3]);

        $addition_2 = new Addition;
        $addition_2->setOperands([2,3]);

        $calculator = new Calculator();
        $calculator->setOperations([$addition_1, $addition_2]);

        $this->assertEquals([8,5], $calculator->calculate());
    }
}