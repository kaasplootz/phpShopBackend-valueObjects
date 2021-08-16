<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Product extends ObjectParser
{
    public function __construct(
        private string $id,
        private string $name,
        private string $description,
        private Image $image,
        private float $price,
        private Tax $tax,
        private int $minOrderQuantity,
        private int $maxOrderQuantity,
        private float $weight,
        private DeliveryTime $deliveryTime
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return Tax
     */
    public function getTax(): Tax
    {
        return $this->tax;
    }

    /**
     * @return int
     */
    public function getMinOrderQuantity(): int
    {
        return $this->minOrderQuantity;
    }

    /**
     * @return int
     */
    public function getMaxOrderQuantity(): int
    {
        return $this->maxOrderQuantity;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return DeliveryTime
     */
    public function getDeliveryTime(): DeliveryTime
    {
        return $this->deliveryTime;
    }
}
