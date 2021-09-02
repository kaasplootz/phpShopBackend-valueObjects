<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class DeliveryTime extends ObjectParser
{
    public function __construct(
        private string $id,
        private int $minDays,
        private int $maxDays,
        private string $unit
    ) {}

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getMinDays(): int
    {
        return $this->minDays;
    }

    /**
     * @return int
     */
    public function getMaxDays(): int
    {
        return $this->maxDays;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
}
