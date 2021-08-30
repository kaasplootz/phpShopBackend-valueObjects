<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Order extends ObjectParser
{
    /**
     * @param OrderItem[] $orderItems
     */
    public function __construct(
        private string $id,
        private array $orderItems,
        private float $shippingCosts,
        private float $totalPrice,
        private DateTime $orderCreated
    ) {}

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    /**
     * @return float
     */
    public function getShippingCosts(): float
    {
        return $this->shippingCosts;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @return DateTime
     */
    public function getOrderCreated(): DateTime
    {
        return $this->orderCreated;
    }
}
