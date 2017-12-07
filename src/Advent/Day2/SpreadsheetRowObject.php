<?php
declare(strict_types=1);

namespace Advent\Day2;

class SpreadsheetRowObject implements SpreadsheetRow
{
    /** @var array */
    private $values;

    public function __construct(string $row)
    {
        $this->values = collect(explode("\t", $row))->map(
            function (string $number): int {
                return (int)$number;
            }
        );
    }

    /**
     * Return difference between largest and smallest value in the row
     *
     * @return int
     */
    public function getCheckDifference(): int
    {
        $min = collect($this->values)->min();
        $max = collect($this->values)->max();

        return $max - $min;
    }

    /**
     * Returns the result of dividing the only two evenly divisible numbers in a row
     * @return int
     */
    public function getDivisibleChecksum(): int
    {
        $count = \count($this->values);
        for ($first = 0; $first < $count - 1; $first++) {
            for ($second = $first + 1; $second < $count; $second++) {
                $num1 = $this->values[$first];
                $num2 = $this->values[$second];

                if ($num2 > $num1) {
                    $temp = $num2;
                    $num2 = $num1;
                    $num1 = $temp;
                }

                if ($num1 % $num2 === 0) {
                    return $num1 / $num2;
                }
            }
        }
    }
}
