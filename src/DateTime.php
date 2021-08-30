<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

use kaasplootz\objectParser\ObjectParser;

class DateTime extends ObjectParser
{
    public function __construct(
        private Date $date,
        private Time $time
    ) {}

    /**
     * @param int $day
     * @param int $month
     * @param int $year
     * @param int $hours
     * @param int $minutes
     * @param int $seconds
     * @return DateTime
     */
    public static function createFormValues(
        int $day,
        int $month,
        int $year,
        int $hours,
        int $minutes,
        int $seconds
    ): DateTime {
        return new DateTime(
            new Date($day, $month, $year),
            new Time($hours, $minutes, $seconds)
        );
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->date->getDay();
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->date->getMonth();
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->date->getYear();
    }

    /**
     * @return int
     */
    public function getHours(): int
    {
        return $this->time->getHours();
    }

    /**
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->time->getMinutes();
    }

    /**
     * @return int
     */
    public function getSeconds(): int
    {
        return $this->time->getSeconds();
    }

    /**
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @return Time
     */
    public function getTime(): Time
    {
        return $this->time;
    }
}
