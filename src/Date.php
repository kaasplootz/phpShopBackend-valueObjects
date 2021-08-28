<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

class Date
{
    public function __construct(
        private int $day,
        private int $month,
        private int $year
    ) {}

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }
}
