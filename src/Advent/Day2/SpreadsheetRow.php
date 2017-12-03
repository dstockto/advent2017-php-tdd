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
}
