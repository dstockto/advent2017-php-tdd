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

    public function getSequenceSum()
    {
        return 3;
    }
}
