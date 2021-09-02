<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Image extends ObjectParser
{
    public function __construct(
        private string $id,
        private string $fileName
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
    public function getFileName(): string
    {
        return $this->fileName;
    }
}
