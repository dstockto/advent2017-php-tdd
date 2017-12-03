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
}
