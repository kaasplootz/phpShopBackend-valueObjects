<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

class ProductImage
{
    public function __construct(
        private int $rank,
        private Image $image
    ) {}

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }
}
