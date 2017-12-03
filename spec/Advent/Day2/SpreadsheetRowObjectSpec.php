<?php
declare(strict_types=1);

namespace spec\Advent\Day2;

use Advent\Day2\SpreadsheetRow;
use Advent\Day2\SpreadsheetRowObject;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpreadsheetRowObjectSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith("1\t4\t9");
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(SpreadsheetRowObject::class);
    }

    public function it_should_be_a_spreadsheet_row()
    {
        $this->shouldHaveType(SpreadsheetRow::class);
    }

    public function it_should_get_8_for_difference()
    {
        $this->getCheckDifference()->shouldBe(8);
    }

    public function it_should_get_100_for_difference_2()
    {
        $this->beConstructedWith("200\t100\t145\t164");
        $this->getCheckDifference()->shouldBe(100);
    }
}
