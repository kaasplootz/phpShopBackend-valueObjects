<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Address extends ObjectParser
{
    public function __construct(
        private int $id,
        private string $street,
        private string $number,
        private string $zipCode,
        private string $place,
        private string $country
    ) {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @param string $place
     */
    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
}
