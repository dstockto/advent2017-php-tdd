<?php
declare(strict_types=1);

namespace Advent\Day2;

class DataLoader
{
    public function buildChecksum(string ...$rows): SpreadsheetChecksum
    {
        $checksum = new SpreadsheetChecksum();

        collect($rows)->each(
            function (string $data) use ($checksum) {
                $row = new SpreadsheetRowObject($data);
                $checksum->addRow($row);
            }
        );

        return $checksum;
    }
}
