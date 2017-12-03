<?php
declare(strict_types=1);

namespace Advent\Day1;

class SequenceMatchCounter
{
    /**
     * @var string
     */
    private $sequence;

    public function __construct(string $sequence)
    {
        $this->sequence = $sequence;
    }

    public function getSequenceSum(): int
    {
        $sum = 0;

        $oldLetter = $this->sequence[0];
        $sequence = substr($this->sequence, 1) . $oldLetter;
        foreach (str_split($sequence) as $letter) {
            if ($oldLetter === $letter) {
                $sum += $letter;
            }
            $oldLetter = $letter;
        }

        return $sum;
    }
}
