<?php

declare(strict_types=1);

namespace Dried\Lang;

/*
 * Authors:
 * - Free Software Foundation, Inc.  bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/en.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
]);
