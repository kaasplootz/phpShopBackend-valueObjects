<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Cart extends ObjectParser
{
    /**
     * @param array|Item[] $items
     */
    public function __construct(
        private ?array $items = []
    ) {}

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getItemByItemId(string $itemId): Item|null
    {
        if (isset($this->items[$itemId])) {
            return $this->items[$itemId];
        }
        return null;
    }

    public function removeItem(string $itemId): void
    {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }

    public function addItem(Item $item): void
    {
        $itemId = Item::generateItemId(array_keys($this->items));
        $this->items[$itemId] = $item;
    }

    public function updateItemAmount(string $itemId, int $amount): void
    {
        if (isset($this->items[$itemId])) {
            $this->items[$itemId]->setAmount($amount);
        }
    }
}
