<?php
declare(strict_types=1);

namespace Advent\Day2;

interface SpreadsheetRow
{
    /**
     * Return difference between largest and smallest value in the row
     *
     * @return int
     */
    public function getCheckDifference(): int;

    /**
     * Returns the result of dividing the only two evenly divisible numbers in a row
     * @return int
     */
    public function getDivisibleChecksum(): int;
}
