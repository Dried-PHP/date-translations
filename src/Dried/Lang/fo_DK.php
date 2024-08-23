<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/fo.php', [
    'formats' => [
        'L' => 'DD.MM.yy',
        'LL' => 'DD.MM.YYYY',
        'LLL' => 'D. MMMM YYYY, HH:mm',
        'LLLL' => 'dddd, D. MMMM YYYY, HH:mm',
    ],
]);
