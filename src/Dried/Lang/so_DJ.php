<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Ge'ez Frontier Foundation    locales@geez.org
 */
return array_replace_recursive(require __DIR__.'/so.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
]);
