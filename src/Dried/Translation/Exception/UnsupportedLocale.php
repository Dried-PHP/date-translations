<?php

declare(strict_types=1);

namespace Dried\Translation\Exception;

use DateTimeZone;
use InvalidArgumentException;

class UnsupportedLocale extends InvalidArgumentException
{
    private function __construct(public readonly string $locale)
    {
        parent::__construct("Unsupported locale '$locale'");
    }

    public static function fromLocale(string $locale): self
    {
        return new self($locale);
    }
}
