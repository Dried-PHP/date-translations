<?php

declare(strict_types=1);

namespace Tests\Dried\Translation\Exception;

use Dried\Translation\Exception\UnsupportedLocale;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class UnsupportedLocaleTest extends TestCase
{
    public function testMessage(): void
    {
        $unsupportedLocale = UnsupportedLocale::fromLocale('pt_BR');

        self::assertInstanceOf(UnsupportedLocale::class, $unsupportedLocale);
        self::assertInstanceOf(InvalidArgumentException::class, $unsupportedLocale);

        self::assertSame(
            "Unsupported locale 'pt_BR'",
            $unsupportedLocale->getMessage(),
        );
        self::assertSame(
            'pt_BR',
            $unsupportedLocale->locale,
        );
    }
}
