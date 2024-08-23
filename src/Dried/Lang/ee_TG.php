<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/ee.php', [
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'LLL' => 'HH:mm MMMM D [lia] YYYY',
        'LLLL' => 'HH:mm dddd, MMMM D [lia] YYYY',
    ],
]);
