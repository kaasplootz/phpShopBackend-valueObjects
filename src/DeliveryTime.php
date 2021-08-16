<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

class DeliveryTime
{
    public function __construct(
        private int $minDays,
        private int $maxDays
    ) {}

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
}
