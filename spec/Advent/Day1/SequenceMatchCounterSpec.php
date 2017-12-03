<?php
declare(strict_types=1);

namespace spec\Advent\Day1;

use Advent\Day1\SequenceMatchCounter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SequenceMatchCounterSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(SequenceMatchCounter::class);
    }
}
