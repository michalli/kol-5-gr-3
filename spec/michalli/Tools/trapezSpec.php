<?php

namespace spec\michalli\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class trapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('michalli\Tools\trapez');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(456)->getH()->shouldReturn(456);
    }
}
