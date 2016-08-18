<?php

namespace Calculator;

class Calculator
{
    public function add($argument1, $argument2)
    {
        return $argument1 + $argument2;
    }

    public function subtract($argument1, $argument2)
    {
        return $argument1 - $argument2;
    }

    public function multiply($argument1, $argument2)
    {
        return $argument1 * $argument2;
    }

    public function divide($argument1, $argument2)
    {
        return $argument1 / $argument2;
    }
}
