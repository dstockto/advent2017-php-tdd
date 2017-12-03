<?php
declare(strict_types=1);

namespace Advent\Day2;

class SpreadsheetChecksum
{
    /** @var SpreadsheetRow[] */
    private $rows;

    public function addRow(SpreadsheetRow $row): void
    {
        $this->rows[] = $row;
    }

    public function getChecksum(): int
    {
        return collect($this->rows)->sum(
            function (SpreadsheetRow $row) {
                return $row->getCheckDifference();
            }
        );
    }
}
