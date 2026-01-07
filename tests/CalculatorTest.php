<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        // Arrange
        $calculator = new Calculator();

        // Assert
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(0, $calculator->add(-1, 1));
    }

    public function testSubtract(): void
    {
        // Arrange
        $calculator = new Calculator();

        // Assert
        $this->assertEquals(1, $calculator->subtract(3, 2));
        $this->assertEquals(-2, $calculator->subtract(-1, 1));
    }
}
