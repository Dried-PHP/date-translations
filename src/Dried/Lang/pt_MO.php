<?php

declare(strict_types=1);

namespace Dried\Lang;

return array_replace_recursive(require __DIR__.'/pt.php', [
    'formats' => [
        'LT' => 'h:mm a',
        'LTS' => 'h:mm:ss a',
        'LLL' => 'D [de] MMMM [de] YYYY, h:mm a',
        'LLLL' => 'dddd, D [de] MMMM [de] YYYY, h:mm a',
    ],
    'first_day_of_week' => 0,
]);
