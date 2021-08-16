<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Image extends ObjectParser
{
    public function __construct(
        private string $id,
        private string $path,
        private string $uploaderId
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
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getUploaderId(): string
    {
        return $this->uploaderId;
    }
}
