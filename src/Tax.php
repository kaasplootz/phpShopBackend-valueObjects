<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

class Tax
{
    public function __construct(
        private string $id,
        private string $taxRate
    ) {}

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTaxRate(): string
    {
        return $this->taxRate;
    }
}
