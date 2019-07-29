<?php

namespace Tests;

use James\Shapes\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function test_area()
    {
        $circle = new Circle(10);
        $expected = 10;
        $this->assertEquals($expected, $circle->area());
    }
}
