<?php
declare(strict_types=1);

namespace spec\Advent\Day2;

use Advent\Day2\DataLoader;
use Advent\Day2\SpreadsheetChecksum;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DataLoaderSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(DataLoader::class);
    }

    public function it_will_build_a_spreadsheet_checksum()
    {
        /** @var SpreadsheetChecksum $result */
        $result = $this->buildChecksum(
            ...[
                "5\t1\t9\t5",
                "7\t5\t3",
                "2\t4\t6\t8",
            ]
        );

        $result->shouldHaveType(SpreadsheetChecksum::class);
        $result->getChecksum()->shouldBe(18);
    }

    public function it_will_build_a_zero_checksum_spreadsheet_for_no_rows()
    {
        $result = $this->buildChecksum(...[]);
        $result->shouldHaveType(SpreadsheetChecksum::class);
        $result->getChecksum()->shouldBe(0);
    }

    public function it_will_solve_day_2_part1()
    {
        $data = file(__DIR__ . '/data/day2.tsv');
        $result = $this->buildChecksum(...$data);
        $result->getChecksum()->shouldBe(48357);
    }

    public function it_will_solve_day_2_part2()
    {
        $data = file(__DIR__ . '/data/day2.tsv');
        $result = $this->buildChecksum(...$data);
        $result->getEvenlyDivisibleChecksum()->shouldBe(351);
    }
}
