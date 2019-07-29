<?php

namespace James\Shapes;

class Circle
{
    private $length;
    public function __construct($length)
    {
        $this->length = $length;
    }
    public function area()
    {
        return $this->length;
    }
}
