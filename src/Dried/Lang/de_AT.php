<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - sheriffmarley
 * - Timo
 * - Michael Hohl
 * - Namoshek
 * - Bernhard Baumrock (BernhardBaumrock)
 */
return array_replace_recursive(require __DIR__.'/de.php', [
    'months' => [
        0 => 'Jänner',
    ],
    'months_short' => [
        0 => 'Jän',
    ],
]);
