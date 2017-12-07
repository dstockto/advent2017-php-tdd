<?php
declare(strict_types=1);

namespace spec\Advent\Day2;

use Advent\Day2\SpreadsheetChecksum;
use Advent\Day2\SpreadsheetRow;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpreadsheetChecksumSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(SpreadsheetChecksum::class);
    }

    public function it_will_total_checksums_for_all_rows(SpreadsheetRow $row1, SpreadsheetRow $row2)
    {
        $this->addRow($row1);
        $this->addRow($row2);

        $row1Value = random_int(1, 100000);
        $row2Value = random_int(1, 100000);

        $row1->getCheckDifference()->willReturn($row1Value);
        $row2->getCheckDifference()->willReturn($row2Value);

        $this->getChecksum()->shouldBe($row1Value + $row2Value);
    }

    public function it_will_calculate_evenly_divisible_checksums(SpreadsheetRow $row1, SpreadsheetRow $row2, SpreadsheetRow $row3)
    {
        $row1->getDivisibleChecksum()->willReturn(4);
        $row2->getDivisibleChecksum()->willReturn(3);
        $row3->getDivisibleChecksum()->willReturn(2);

        $this->addRow($row1);
        $this->addRow($row2);
        $this->addRow($row3);

        $this->getEvenlyDivisibleChecksum()->shouldBe(9);
    }

    public function it_will_calculate_evenly_divisible_checksums_part2(SpreadsheetRow $row1, SpreadsheetRow $row2, SpreadsheetRow $row3)
    {
        $values = [
            random_int(1, 10000),
            random_int(1, 1000),
            random_int(1, 10000),
        ];
        $row1->getDivisibleChecksum()->willReturn($values[0]);
        $row2->getDivisibleChecksum()->willReturn($values[1]);
        $row3->getDivisibleChecksum()->willReturn($values[2]);

        $this->addRow($row1);
        $this->addRow($row2);
        $this->addRow($row3);

        $this->getEvenlyDivisibleChecksum()->shouldBe(array_sum($values));
    }
}
