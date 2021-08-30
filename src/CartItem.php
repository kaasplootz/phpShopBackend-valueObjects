<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;
use kaasplootz\uuid_generator\UuidGenerator;

class CartItem extends ObjectParser
{
    public function __construct(
        private string $itemId,
        private Product $product,
        private int $quantity
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
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public static function generateItemId(array $alreadyAssigned): string
    {
        $uuidGenerator = new UuidGenerator;
        return $uuidGenerator->generate($alreadyAssigned);
    }
}
