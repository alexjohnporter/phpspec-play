<?php

namespace spec\Calculator;

use Calculator\Calculator;
use Calculator\EndOfTheWorldException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_should_add_two_numbers()
    {
        $this->add(2,3)->shouldReturn(5);
    }

    function it_should_subtract_one_number_from_another()
    {
        $this->subtract(10,3)->shouldReturn(7);
    }

    function it_should_multiple_two_numbers()
    {
        $this->multiply(2,6)->shouldReturn(12);
    }

    function it_should_divide_two_numbers()
    {
        $this->divide(100, 4)->shouldReturn(25);
    }
}
