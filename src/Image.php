<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

class Image
{
    public function __construct(
        private string $id,
        private string $url,
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
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getUploaderId(): string
    {
        return $this->uploaderId;
    }
}
