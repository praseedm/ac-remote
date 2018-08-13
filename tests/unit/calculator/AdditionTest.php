<?php

use \Calculator\Addition;

class AdditionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function add_operands () {
        $addition  = new Addition;
        $addition->setOperands([5,10]);

        $this->assertEquals(15,$addition->calculate());
    }

    /** @test */
    public function noOperands_throws_exception () {
        $this->expectException(\Calculator\Exceptions\noOperandsException::class);

        $addition = new Addition;
        $addition->calculate();
    }
}