<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Cart extends ObjectParser
{
    /**
     * @param CartItem[] $items
     */
    public function __construct(
        private array $items = []
    ) {}

    /**
     * @return CartItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(CartItem $item): void
    {
        $this->items[] = $item;
    }
}
