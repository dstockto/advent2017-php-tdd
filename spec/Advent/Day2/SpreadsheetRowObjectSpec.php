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

    public function it_should_get_even_checksum_for_2_and_8()
    {
        $this->beConstructedWith("8\t7\t3\t2");
        $this->getDivisibleChecksum()->shouldBe(4);
    }

    public function it_should_get_even_checksum_for_9_and_3()
    {
        $this->beConstructedWith("8\t9\t3\t25");
        $this->getDivisibleChecksum()->shouldBe(3);
    }
}
