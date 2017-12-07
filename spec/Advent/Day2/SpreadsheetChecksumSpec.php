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
}
