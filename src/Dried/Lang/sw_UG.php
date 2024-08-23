<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/sw.php', [
    'formats' => [
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMM YYYY',
    ],
]);
