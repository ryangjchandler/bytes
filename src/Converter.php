<?php

namespace RyanChandler\Bytes;

class Converter
{
    public const BYTES_IN_KIB = 1024;

    public const BYTES_IN_KB = 1000;

    final public function __construct(
        protected int | float $subject
    ) {
    }

    public static function from(int|float $subject): static
    {
        return new static($subject);
    }

    public function toKiB(): int|float
    {
        return $this->subject / static::BYTES_IN_KIB;
    }

    public function toKb(): int|float
    {
        return $this->subject / static::BYTES_IN_KB;
    }

    public function toMb(): int|float
    {
        return $this->subject / (static::BYTES_IN_KB ** 2);
    }

    public function toMiB(): int|float
    {
        return $this->subject / (static::BYTES_IN_KIB ** 2);
    }

    public function toGb(): int|float
    {
        return $this->subject / (static::BYTES_IN_KB ** 3);
    }

    public function toGiB(): int|float
    {
        return $this->subject / (static::BYTES_IN_KIB ** 3);
    }
}
