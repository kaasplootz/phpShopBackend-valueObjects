<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Tax extends ObjectParser
{
    public function __construct(
        private string $id,
        private int $taxRate
    ) {}

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->taxRate;
    }
}
