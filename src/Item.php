<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;
use kaasplootz\uuid_generator\UuidGenerator;

class Item extends ObjectParser
{
    public function __construct(
        private string $itemId,
        private Product $product,
        private int $amount
    ) {}

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public static function generateItemId(array $alreadyAssigned): string
    {
        $uuidGenerator = new UuidGenerator;
        return $uuidGenerator->generate($alreadyAssigned);
    }
}
