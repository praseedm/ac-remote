<?php
use \Calculator\Division;
class DivisionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function divide_operands() {
        $division = new Division;
        $division->setOperands([100,2]);

        $this->assertEquals(50,$division->calculate());
    }

}