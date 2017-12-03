<?php
declare(strict_types=1);

namespace spec\Advent\Day1;

use Advent\Day1\SequenceMatchCounter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SequenceMatchCounterSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('4');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(SequenceMatchCounter::class);
    }

    public function it_will_return_3_for_1122()
    {
        $this->beConstructedWith('1122');
        $this->getSequenceSum()->shouldBe(3);
    }

    public function it_will_return_4_for_1111()
    {
        $this->beConstructedWith('1111');
        $this->getSequenceSum()->shouldBe(4);
    }
}
