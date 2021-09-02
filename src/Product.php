<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Product extends ObjectParser
{
    /**
     * @param Image[] $images
     */
    public function __construct(
        private string $id,
        private string $name,
        private string $description,
        private array $images,
        private float $price,
        private Tax $tax,
        private int $minQuantity,
        private int $maxQuantity,
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
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
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
    public function getMinQuantity(): int
    {
        return $this->minQuantity;
    }

    /**
     * @return int
     */
    public function getMaxQuantity(): int
    {
        return $this->maxQuantity;
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
