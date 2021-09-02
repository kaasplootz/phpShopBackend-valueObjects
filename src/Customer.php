<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class Customer extends ObjectParser
{
    /**
     * @param string|null $id
     * @param string|null $company
     * @param Address[] $addresses
     * @param Order[] $orders
     */
    public function __construct(
        private bool $registered,
        private ?string $id,
        private ?string $company,
        private string $salutation,
        private string $firstName,
        private string $lastName,
        private string $email,
        private string $phoneNumber,
        private Date $birthDate,
        private array $addresses = [],
        private array $orders = []
    ) {}

    /**
     * @return bool
     */
    public function isRegistered(): bool
    {
        return $this->registered;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @return Date
     */
    public function getBirthDate(): Date
    {
        return $this->birthDate;
    }

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param bool $registered
     */
    public function setRegistered(bool $registered): void
    {
        $this->registered = $registered;
    }

    /**
     * @param string|null $company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $salutation
     */
    public function setSalutation(string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param Date $birthDate
     */
    public function setBirthDate(Date $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @param Address[] $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @return Order[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
}
