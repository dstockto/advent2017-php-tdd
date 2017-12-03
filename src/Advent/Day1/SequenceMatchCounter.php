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

    public function getCircleSequenceSum(): int
    {
        $sum = 0;
        $length = strlen($this->sequence);
        $halfLen = $length / 2;

        for ($index = 0, $indexMax = strlen($this->sequence); $index < $indexMax; $index++) {
            $currentLetter = $this->sequence[$index];
            $buddyLetter = $this->sequence[($index + $halfLen) % $length];

            if ($currentLetter === $buddyLetter) {
                $sum += $currentLetter;
            }
        }

        return $sum;
    }
}
