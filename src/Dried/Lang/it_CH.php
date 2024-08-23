<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Propaganistas
 */
return array_replace_recursive(require __DIR__.'/it.php', [
    'formats' => [
        'L' => 'DD.MM.YYYY',
    ],
]);
