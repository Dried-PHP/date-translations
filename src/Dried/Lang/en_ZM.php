<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - ANLoc Martin Benjamin locales@africanlocalization.net
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
]);
